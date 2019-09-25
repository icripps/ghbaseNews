<?php

namespace App\Http\Controllers\Api;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\shared\CategoryMasterController;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;
use App\Post;

class CategoryApiController extends Controller
{
    public $masterController;

    public function __construct()
    {
        $this->masterController = new CategoryMasterController();
    }
    public function index()
    {
        $category = Category::all();
        //  return new CategoryResource($this->masterController->index());
        return  CategoryResource::collection($category);
    }

    public function posts($id)
    {
        $posts = Category::find($id)->posts();
        // $posts = $category->posts;
        return PostResource::collection($posts);
    }

    public function show($id)
    { }
}
