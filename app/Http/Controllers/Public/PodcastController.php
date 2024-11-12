<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Tag;
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
        $source = 'podcast';
        $episodes = $this->listEpisodeService->list();
        $lastEpisode = $this->listEpisodeService->lastEpisode();
        $tags = $lastEpisode->tags->pluck('name')->implode(',');
        return view('public.podcast.podcast', compact('episodes', 'lastEpisode', 'source', 'tags'));
    }

    public function show(string $slug)
    {
        $episode = $this->episodeInfoService->__invoke($slug);
        $source = 'podcast: '. $slug;
        $tags = $episode->tags->pluck('name')->implode(',');
        return view('public.podcast.episode', [
            'episode' => $episode,
            'source' => $source
            ,'tags' => $tags
        ]);
    }
}
