<?php

namespace App\Listeners;

use App\Events\UserRegisteredAsLead;
use App\Service\LeadsService\LeadsRegisterServiceInterface;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Throwable;

class RegisterUserAsLead implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * The number of times the queued listener may be attempted.
     *
     */
    public int $tries = 5;


    /**
     * Create the event listener.
     */
    public function __construct(private LeadsRegisterServiceInterface $leadsRegisterService)
    {
    }

    /**
     * Handle the event.
     */
    public function handle(UserRegisteredAsLead $event): void
    {
        $user = $event->user;
        $leadExists = $this->leadsRegisterService->exist($user->email);
        if ($leadExists) {
            return;
        }

        try {
            $this->leadsRegisterService->create(
                email: $user->email,
                name: $user->name,
                lastname: $user->last_name ?? '',
                source: 'web',
                tags: ['registrado'],
            );
        } catch (\Exception $e) {
            Log::error('Error al registrar el usuario como lead: ' . $e->getMessage());
        }
    }

    public function failed(UserRegisteredAsLead $event, Throwable $exception): void
    {
        Log::critical('El listener RegisterUserAsLead falló después de todos los intentos.', [
            'user_email' => $event->user->email,
            'exception_message' => $exception->getMessage(),
            'exception_trace' => $exception->getTraceAsString(),
        ]);

        try {
            \Illuminate\Support\Facades\Mail::to('contacto@notasweb.me')->send(
                new \App\Mail\FailedJobNotification(
                    'RegisterUserAsLead',
                    $event->user->email,
                    $exception->getMessage()
                )
            );
        } catch (\Exception $e) {
            Log::error('Error al enviar notificación de fallo del listener: ' . $e->getMessage());
        }
    }

    public function retryUntil(): \DateTime
    {
        return now()->addMinutes(5);
    }
}
