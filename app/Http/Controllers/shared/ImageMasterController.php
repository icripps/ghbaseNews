<?php

namespace App\Http\Controllers\shared;

use App\Http\Resources\ImagesResource;
use App\Image;
use Illuminate\Http\Request;

class ImageMasterController extends Controller
{
    public function index()
    {
        return new ImagesResource(Image::paginate());
    }

    public function show($id)
    { }

    public function store(Request $request)
    { }
}
