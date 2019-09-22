<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('categories.categories')->with([
            'categories' => Category::paginate()
        ]);
    }

    public function show($id)
    {
        return view('categories.category')->with([
            'category' => Category::find($id),
        ]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'category_title' => 'required|max:255',
            'category_color' => 'required',
        ]);
        $category = new Category();

        $category->title = $request->category_title;
        $category->color = $request->category_color;

        $category->save();

        return redirect()->back();
    }
}
