<?php

namespace App\Http\Controllers\shared;

use App\Http\Resources\PostsResource;
use App\Post;
use Illuminate\Http\Request;

class PostMasterController extends Controller
{
    public function index()
    {
        return new PostsResource(Post::paginate());
    }

    public function show($id)
    { }

    public function store(Request $request)
    { }
}
