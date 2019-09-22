<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\shared\VideoMasterController;

class VideoApiController extends Controller
{
    public $masterController;

    public function __construct()
    {
        $this->masterController = new VideoMasterController();
    }

    public function index()
    { }

    public function show($id)
    { }
}
