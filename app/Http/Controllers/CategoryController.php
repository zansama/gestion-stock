<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function show() {
        $this->authorize('view', Category::class);
        $categories = Category::all();
        return view('categories', ["categories" => $categories]);
    }

    public function addcategory() {
        $this->authorize('view', Category::class);
        return view('addCategory');
    }

    public function store(Request $request) {
        $this->authorize('view', Category::class);
        $category = new Category();
        $category -> name = request('name');
        $category->save();

        return redirect('/categories');

    }
    public function edit($id)
    {
        $this->authorize('update',Category::class);
        $category = Category::find($id);
        return view('categoryUpdate', compact('category'));
    }

    public function update(Request $request, $id)
    {

        $categoryName = $request->input('name');

        $category = Category::find($id);

        $category->name = $categoryName;
        $category->save();

        return redirect('/categories');
    }
    public function destroy($id)
    {
        $this->authorize('delete',Category::class);
        $category = Category::find($id);
        $category->delete();
        return redirect('/categories');
    }
}
