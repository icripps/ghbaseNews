<?php

namespace App\Http\Controllers\shared;

use App\Http\Resources\TagsResource;
use App\Tag;
use Illuminate\Http\Request;

class TagMasterController extends Controller
{
    public function index()
    {
        return new TagsResource(Tag::paginate());
    }

    public function show($id)
    { }

    public function store(Request $request)
    { }
}
