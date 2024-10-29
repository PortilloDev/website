<?php
namespace App\Service\ProductService;

use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ProductInfoService
{
    private Product $product;
    public function __construct()
    {
        $this->product = new Product();
    }

    public function __invoke(string $slug): ?Product
    {
        return $this->product->where('slug', $slug)->first();
    }
}
