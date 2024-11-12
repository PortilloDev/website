<?php

namespace App\Service\NeswletterService;

interface NewsletterServiceInterface
{
    public function addMemberToList(string $email, string $name, string $source, ?array $tags = []): array;

    public function existMember(string $email): bool|object;

}
