<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ProductType;
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
        $uploadProducts = $this->listProductsService->listProductsByProductType(ProductType::PRODUCT_TYPE_UPLOAD);
        $ebookProducts = $this->listProductsService->listProductsByProductType(ProductType::PRODUCT_TYPE_EBOOK);
        $courseProducts = $this->listProductsService->listProductsByProductType(ProductType::PRODUCT_TYPE_COURSE);

        return view('public.product', compact('uploadProducts', 'ebookProducts', 'courseProducts', 'types'));
    }

    public function show(string $slug)
    {
        $product = $this->productInfoService->__invoke($slug);
        return view('public.product-show.blade.php', [
            'product' => $product
        ]);
    }
}
