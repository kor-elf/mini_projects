<?php
namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Product;
use App\Jobs\NotificationProductCreated;

class ProductService
{
    public function getListPaginate(int $limit, bool $isAdmin = false): LengthAwarePaginator
    {
        if ($isAdmin) {
            return Product::paginate($limit);
        }
        return Product::active()->paginate($limit);
    }

    public function store(array $attributes): Product
    {
        $product = Product::create($attributes);
        NotificationProductCreated::dispatch($product);
        return $product;
    }

    public function update(Product $product, array $attributes): Product
    {
        $product->update($attributes);
        return $product;
    }

    public function destroy(Product $product): void
    {
        $product->delete();
    }
}
