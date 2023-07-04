<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {

        $categoryId = $request->get('category_id');
        if ($categoryId) {
            $posts = Post::where('category_id', $categoryId)->get();
        } else {
            $posts = Post::all();
        }
        return view('pages.post-page', ['posts'=> $posts]);
    }

    public function show(int $id) {
        $post = Post::findOrFail($id);
        return view('pages.post-page', compact('post'));
    }
}
