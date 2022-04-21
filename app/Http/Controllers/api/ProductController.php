<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index(): AnonymousResourceCollection
    {
        $products = Product::all();
        return ProductResource::collection($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response|null
     */
    public function create(): ?Response
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $product_id
     * @return Response
     */
    public function show(int $product_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $product_id
     * @return Response
     */
    public function edit(int $product_id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param int $product_id
     * @return Response
     */
    public function update(Request $request, int $product_id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $product_id
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy($product_id): Application|RedirectResponse|Redirector
    {
        $product = products::find($product_id);
        $product->delete();
        return redirect('/products');
    }
}
