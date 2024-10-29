<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Service\EpisodeService\EpisodeInfoService;
use App\Service\EpisodeService\ListEpisodesService;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    private ListEpisodesService  $listEpisodeService;
    private EpisodeInfoService $episodeInfoService;

    public function __construct()
    {
        $this->listEpisodeService = new ListEpisodesService();
        $this->episodeInfoService = new EpisodeInfoService();
    }
    public function index()
    {
        $episodes = $this->listEpisodeService->list();
        $lastEpisode = $this->listEpisodeService->lastEpisode();
        return view('public.podcast', compact('episodes', 'lastEpisode'));
    }

    public function show(string $slug)
    {
        $episode = $this->episodeInfoService->__invoke($slug);
        return view('public.episode', [
            'episode' => $episode,
        ]);
    }
}
