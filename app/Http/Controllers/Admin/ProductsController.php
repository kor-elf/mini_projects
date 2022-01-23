<?php
namespace App\Http\Controllers\Admin;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\AdminController;
use App\Models\Product;
use App\Enums\Status;
use App\Http\Requests\Admin\ProductRequest;
use App\Services\ProductService;

class ProductsController extends AdminController
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index(): View
    {
        $limit = 20;
        $isAdmin = true;

        return view('admin.products.index', [
            'products' => $this->productService->getListPaginate($limit, $isAdmin)
        ]);
    }

    public function create(): View
    {
        $product = new Product();
        $statuses = new Status();
        $statuses = $statuses->getList();

        return view('admin.products.create', [
            'product' => $product,
            'statuses' => $statuses
        ]);
    }

    public function edit(Product $product): View
    {
        $statuses = new Status();
        $statuses = $statuses->getList();

        return view('admin.products.edit', [
            'product' => $product,
            'statuses' => $statuses
        ]);
    }

    public function store(ProductRequest $request): RedirectResponse
    {
        $attributes = $request->only([
            'art',
            'name',
            'status',
            'data',
        ]);
        $product = $this->productService->store($attributes);

        return redirect()->route('admin.products.edit', $product)->withSuccess('Product created successfully');
    }

    public function update(ProductRequest $request, Product $product): RedirectResponse
    {
        $attributes = $request->only([
            'art',
            'name',
            'status',
            'data',
        ]);
        $product = $this->productService->update($product, $attributes);

        return redirect()->route('admin.products.edit', $product)->withSuccess('Product successfully updated');
    }

    public function destroy(Product $product)
    {
        $this->productService->destroy($product);

        return redirect()->route('admin.products.index')->withSuccess('Product successfully removed');
    }
}
