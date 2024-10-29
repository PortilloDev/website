<?php

namespace App\Service\SubscriberService;

use App\Models\Subscriber;

class SubscriberRegisterService
{
    private Subscriber $subscriber;

    public function __construct()
    {
        $this->subscriber = new Subscriber();
    }

    public function save(string $email, string  $name, ?string $lastname, ?string $source = Subscriber::SOURCE_WEB): void
    {
        try {
            $this->subscriber->create(
                [
                    'email' => $email,
                    'name' => $name,
                    'lastname' => $lastname,
                    'status' => Subscriber::STATUS_SUBSCRIBED,
                    'source' => $source
                ]
            );
        }catch (\Exception $e){
            if($e->getCode() == 23000){
                throw new \Exception('El email ya se encuentra registrado');
            }
        }

    }

    public function exists(string $email)
    {
        return $this->subscriber::where('email', $email)->exists();
    }

}
