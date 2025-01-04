<?php

namespace App\Service\UserService;

use App\Events\AuditEvent;
use App\Events\UserRegisteredAsLead;
use App\Models\AuditLog;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Cache;

class CreateUserService
{
    public function __invoke(array $data): User
    {
        $lockKey = 'create_user_' . md5(json_encode($data));

        $lock = Cache::lock($lockKey, 5);
        if ($lock->get()) {
            try {
                $user = User::create($data);
                event(new Registered($user));
                event(new UserRegisteredAsLead($user));
                event(new AuditEvent(
                    AuditLog::TYPE_REGISTERED,
                    'Nuevo registro de usuario',
                    $user->id,
                    request()->ip(),
                    request()->userAgent()
                ));
            } catch (\Exception $e) {
                event(new AuditEvent(
                    AuditLog::TYPE_FAILED,
                    'Error al registrar el usuario',
                    null,
                    request()->ip(),
                    request()->userAgent(),
                    ['message' => $e->getMessage()]
                ));
                throw $e;
            } finally {
                $lock->release();
            }

            return $user;
        } else {
            throw new \Exception('Proceso de creación de usuario en curso. Inténtelo de nuevo más tarde.');
        }
    }
}
