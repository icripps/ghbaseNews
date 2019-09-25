<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\shared\PostMasterController;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;
use App\Post;

class PostApiController extends Controller
{
    public $masterController;

    public function __construct()
    {
        //$this->masterController = new PostMasterController();
    }

    public function index()
    {
        $posts = Post::with(['author', 'images', 'videos', 'category', 'tags']);

        return PostResource::collection($posts);
    }

    public function show($id)
    { }
}
