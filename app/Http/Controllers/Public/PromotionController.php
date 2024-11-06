<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\Models\Tag;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function show(string $slug, ? Request $request)
    {
        $source = 'promotion: '. $slug;
        $promotion = Promotion::where('slug', $slug)->firstOrFail();
        $tags = $promotion->tags->pluck('name')->implode(',');
        return view('public.promotions.show', compact('promotion', 'source', 'tags'));
    }
}
