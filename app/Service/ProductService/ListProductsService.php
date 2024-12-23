<?php
namespace App\Service\ProductService;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductType;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ListProductsService
{
    private Product $product;
    private ProductType $type;
    public function __construct()
    {
        $this->product = new Product();
        $this->type = new ProductType();
    }

    public function uniqueList(int $count = 0): LengthAwarePaginator | Collection
    {
        if ($count > 0) {
            return   $this->product::paginate($count);
        }
          return $this->product->all();
    }

    public function listProductsByProductType(int $productTypeId): \Illuminate\Support\Collection
    {
        $type =  $this->type::find($productTypeId);
        if (!$type) {
            return collect([]);
        }
        return $type->products()->get();
    }
}
