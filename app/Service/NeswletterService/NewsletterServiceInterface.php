<?php

namespace App\Service\NeswletterService;

interface NewsletterServiceInterface
{
    public function addMemberToList(string $email, string $name, string $source, ?array $tags = []): array;

}
