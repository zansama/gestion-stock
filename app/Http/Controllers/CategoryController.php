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
}
