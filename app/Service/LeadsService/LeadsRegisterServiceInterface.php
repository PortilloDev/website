<?php

namespace App\Service\LeadsService;

use App\Models\Lead;

interface LeadsRegisterServiceInterface
{
    public function create(
        string $email,
        string  $name,
        ?string $lastname,
        ?string $source = Lead::SOURCE_WEB,
        ?array $tags = null,
        ?int $productId = null,
        ?int $episodeId = null,
        ?int $promotionId = null,
    ): array;

    public function existInService(string $email): bool|object;

    public function exist(string $email): bool;

}
