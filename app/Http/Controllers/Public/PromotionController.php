<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function show($slug)
    {
        $promotion = Promotion::where('slug', $slug)->firstOrFail();
        return view('promotions.show.blade.php', compact('promotion'));
    }
}
