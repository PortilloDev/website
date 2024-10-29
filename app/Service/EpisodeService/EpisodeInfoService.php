<?php
namespace App\Service\EpisodeService;

use App\Models\Episode;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class EpisodeInfoService
{
    private Episode $episode;
    public function __construct()
    {
        $this->episode = new Episode();
    }

    public function __invoke(string $slug): ?Episode
    {
        return $this->episode->where('slug', $slug)->first();
    }
}
