<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\shared\ImageMasterController;

class ImageApiController extends Controller
{
    public $masterController;

    public function __construct()
    {
        $this->masterController = new ImageMasterController();
    }
    public function index()
    { }

    public function show($id)
    { }
}
