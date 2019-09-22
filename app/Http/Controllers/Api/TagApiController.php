<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\shared\TagMasterController;
use App\Http\Resources\PostResource;
use App\Http\Resources\TagResource;
use App\Tag;

class TagApiController extends Controller
{
    public $masterController;

    public function __construct()
    {
        // $this->masterController = new TagMasterController();
    }

    public function index()
    {
        $tags = Tag::paginate();
        return TagResource::collection($tags);
    }

    public function show($id)
    { }

    public function posts($id)
    {
        $tag = Tag::find($id);
        $posts = $tag->posts;

        return PostResource::collection($posts);
    }
}
