<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $source = 'contact';
        $tags = 'contact';
        return view('public.contact', compact('source', 'tags'));
    }
}
