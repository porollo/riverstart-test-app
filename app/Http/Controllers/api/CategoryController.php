<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection|Response
     */
    public function index(): Response|AnonymousResourceCollection
    {
        $categories = Category::all();
        return CategoryResource::collection($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function create(): Application|RedirectResponse|Redirector
    {
        $id = 0;
        $category = category::find($id);
        $category->create();
        return redirect('/category');    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function store(): Application|RedirectResponse|Redirector
    {
        $id = 0;
        $category = category::find($id);
        $category->store();
        return redirect('/category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Application|Redirector|RedirectResponse
     */
    public function show(int $id): Application|RedirectResponse|Redirector
    {
        $category = category::find($id);
        $category->show();
        return redirect('/category');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Redirector|RedirectResponse
     */
    public function edit(int $id): Application|RedirectResponse|Redirector
    {
        $category = category::find($id);
        $category->edit();
        return redirect('/category');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Application|Redirector|RedirectResponse
     */
    public function update(int $id): Application|RedirectResponse|Redirector
    {
        $category = category::find($id);
        $category->update();
        return redirect('/category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Application|RedirectResponse|Redirector
     */
    public function destroy(int $id): Application|RedirectResponse|Redirector
    {
        $category = category::find($id);
        $category->delete();
        return redirect('/category');
    }
}
