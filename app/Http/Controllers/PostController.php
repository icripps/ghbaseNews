<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts =  Post::paginate();

        return view('posts.posts')->with('posts', $posts);
    }

    public function show($id)
    {
        $post = Post::find($id);
        $images = $post->images;
        $videos = $post->videos;
        return view('posts.post')->with([
            'post' => $post,
            'images' => $images,
            'videos' => $videos,
        ]);
    }

    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'post_title' => 'required|max:255',
            'post_content' => 'required',
            'category_id' => 'required',
        ]);

        $post = new Post();
        $user = Auth::user();

        $post->title = $request->post_title;
        $post->content = $request->post_content;
        $post->category_id = $request->category_id;
        $post->post_type = 'text';
        $post->author_id = $user->id;
        $post->save();

        if ($request->has('tags')) {
            $post->tags()->attach($request->tags);
        }

        if ($request->hasFile('post_images')) {
            $counter = 0;
            $images = $request->file('post_images');
            foreach ($images as $image) {
                $path = $image->store('public');
                $image = new Image();
                $image->url = $path;
                $image->description = '';
                $image->post_id = $post->id;
                if ($counter == 0) {
                    $image->featured = true;
                } else {
                    $image->featured = false;
                }
                $image->save();
                $counter++;
            }
        }

        return redirect()->route('posts');
    }

    public function addPost()
    {
        $tags = Tag::all();
        $category = Category::all();
        return view('posts.addPost')->with([
            'category' => $category,
            'tags'  => $tags
        ]);
    }
}
