<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct(
        private Category $category
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ['data' => $this->category->with('books')->get()];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ['data' => $this->category->create($request->all())];
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return ['data' => $category];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        if($category->update($request->all()))
            return ['data' => $category];

        return response()->json([], 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->delete())
            return ['data' => $category];

        return response()->json([], 500);
    }
}
