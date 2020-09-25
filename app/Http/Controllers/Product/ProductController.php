<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreProductRequest;
use App\Service\ProductService;

/**
 * Class ProductController
 * @package App\Http\Controllers\Product
 */
class ProductController extends Controller
{
    private $service;

    /**
     * ProductController constructor.
     */
    public function __construct()
    {
        $this->service = new ProductService();
    }

    /**
     * @param StoreProductRequest $request
     */
    public function store(StoreProductRequest $request)
    {
        dd(4);
        $this->service->save($request);
    }
}
