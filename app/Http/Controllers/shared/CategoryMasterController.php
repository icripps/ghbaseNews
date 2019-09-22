<?php

namespace App\Http\Controllers\shared;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesResource;

class CategoryMasterController extends Controller
{
    public function index()
    {
        return new CategoriesResource(Category::paginate());
    }

    public function show($id)
    { }

    public function store(Request $request)
    { }
}
