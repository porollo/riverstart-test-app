<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
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
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function show(int $id): Application|RedirectResponse|Redirector
    {
        $product = product::find($id);
        $product->show($id);
        return redirect('/products'); //FixIt
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function edit(int $id): Application|RedirectResponse|Redirector
    {
        $product = product::find($id);
        $product->edit();
        return redirect('/product_edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function update($id): Application|RedirectResponse|Redirector
    {
       $product = product::find($id);
       $product->update();
       return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy($id): Application|RedirectResponse|Redirector
    {
        $product = product::find($id);
        $product->delete();
        return redirect('/products');
    }
}
