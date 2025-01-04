<?php

namespace App\Listeners;

use App\Events\AuditEvent;
use App\Models\AuditLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AuditEventListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(AuditEvent $event): void
    {
        AuditLog::create([
            'event_type' => $event->eventType,
            'description' => $event->description,
            'user_id' => $event->userId,
            'ip_address' => $event->ipAddress,
            'userAgent' => $event->userAgent,
            'properties' =>json_encode( $event->properties),
        ]);
    }
}
