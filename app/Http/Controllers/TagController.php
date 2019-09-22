<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return view('tags.tags')->with([
            'tags' => Tag::all()
        ]);
    }

    public function show($id)
    {
        return view('tags.tag')->with([
            'tag' => Tag::find($id)
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'tag_title' => 'required|max:255'
        ]);

        $tag = new Tag();

        $tag->title = $request->get('tag_title');

        $tag->save();

        return redirect()->back();
    }
}
