<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AboutController extends Controller
{
    public function index()
    {
        $source = 'About';
        $tags = 'About';
        return view('public.about', compact('source', 'tags' ));
    }
}
