<?php

namespace App\Http\Controllers\shared;

use App\Http\Resources\VideosResource;
use Illuminate\Http\Request;

class VideoMasterController extends Controller
{
    public function index()
    {
        return new VideosResource(Video::class);
    }

    public function show($id)
    { }

    public function store(Request $request)
    { }
}
