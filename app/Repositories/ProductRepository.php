<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Contracts\ProductRepositoryInterface;

/**
 * Class ProductRepository.
 */
class ProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        return Product::all();
    }

    public function find($id)
    {
        return Product::find($id);
    }

    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Product::class;
    }
}
