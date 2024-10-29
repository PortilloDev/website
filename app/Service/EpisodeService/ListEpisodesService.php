<?php

namespace App\Service\EpisodeService;

use App\Models\Episode;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ListEpisodesService
{
    private Episode $episode;

    public function __construct()
    {
        $this->episode = new Episode();
    }
    public function list(int $count = 0): LengthAwarePaginator | Collection
    {
        if ($count > 0) {
          return   $this->episode::paginate($count);
        }
        return $this->episode->all();
    }

    public function lastEpisode(): Episode
    {
        return $this->episode->latest()->first();
    }

}