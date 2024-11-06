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
        ?int $episodeId = null
    ): array;

}
