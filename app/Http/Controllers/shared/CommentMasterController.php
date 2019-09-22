<?php

namespace App\Http\Controllers\shared;

use App\Comment;
use App\Http\Resources\CommentsResource;
use Illuminate\Http\Request;

class CommentMasterController extends Controller
{
    public function index()
    {
        return new CommentsResource(Comment::paginate());
    }

    public function show($id)
    { }

    public function store(Request $request)
    { }
}
