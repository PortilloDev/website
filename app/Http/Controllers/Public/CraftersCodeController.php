<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CraftersCodeController extends Controller
{
    public function index()
    {
        return view('public.crafters_code');
    }
}
