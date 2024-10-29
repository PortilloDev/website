<?php

namespace App\Service\ProductTypeService;

use App\Models\ProductType;

class ListProductTypeService
{
    private ProductType $type;
    public function __construct()
    {
        $this->type = new ProductType();
    }

    public function all(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->type::all();
    }

}
