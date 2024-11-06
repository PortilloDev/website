<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Service\EpisodeService\ListEpisodesService;
use App\Service\ProductService\ListProductsService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private ListEpisodesService  $listEpisodeService;
    private ListProductsService  $listProductsService;

    public function __construct()
    {
        $this->listEpisodeService = new ListEpisodesService();
        $this->listProductsService = new ListProductsService();
    }
    public function index()
    {
        $source = 'home';
        $tags = 'home';

        return view('public.home', compact('source', 'tags'));
    }
}
