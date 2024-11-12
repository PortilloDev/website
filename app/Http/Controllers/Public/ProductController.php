<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\Tag;
use App\Service\ProductService\ListProductsService;
use App\Service\ProductService\ProductInfoService;
use App\Service\ProductTypeService\ListProductTypeService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private ListProductsService $listProductsService;
    private ProductInfoService $productInfoService;

    private ListProductTypeService $listProductTypeService;
    public function __construct()
    {
        $this->listProductsService = new ListProductsService();
        $this->productInfoService = new ProductInfoService();
        $this->listProductTypeService = new ListProductTypeService();
    }

    public function index()
    {
        $types = $this->listProductTypeService->all();
        $productsByType = [];
        $source = 'product';
        $tags = Tag::all(['name'])->pluck('name')->implode(',');
        foreach ($types as $type) {
            $products = $this->listProductsService->listProductsByProductType($type->id);
            $productsByType[$type->slug] =[
                'type' => $type,
                'products' => $products
            ];
        }
        return view('public.product.product', compact('productsByType', 'types', 'source', 'tags'));
    }

    public function show(string $slug)
    {
        $source = 'product: '. $slug;
        $product = $this->productInfoService->__invoke($slug);
        $tags = $product->tags->pluck('name')->implode(',');
        return view('public.product.product-show', [
            'product' => $product
            ,'source' => $source
            ,'tags' => $tags
        ]);
    }
}
