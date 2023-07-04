<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        return view('pages.post-page', ['posts' => $posts]);
    }

    public function show(int $id)
    {
        $post = Post::findOrFail($id);
        return view('pages.post-page', compact('post'));
    }
    public function getCreate()
    {

        return view(
            'pages.actions-post-page',
            [
                'type' => 'create',
                'route' => 'posts.create',
                'title' => 'Crear Post',
                'button' => 'Crear Post',
                'form' =>
                [
                    [
                        'field' => 'title',
                        'label' => 'Titulo',
                        'type' => 'text'
                    ],
                    [
                        'field' => 'content',
                        'label' => 'Contenido',
                        'type' => 'textarea'
                    ],
                    [
                        'field' => 'category_id',
                        'label' => 'Categoria',
                        'type' => 'select'
                    ],

                    [
                        'field' => 'author_name',
                        'label' => 'Autor',
                        'type' => 'text'
                    ],
                    [
                        'field' => 'image',
                        'label' => 'Imagen',
                        'type' => 'text'
                    ],
                    
                ],


            ]
        );
    }

    public function create(Request $request)
    {
        $slug = Str::slug($request->get('title'));
        $post = new Post();
        $post->slug = $slug;
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->category_id = $request->get('category_id');
        $post->author_name = $request->get('author_name');
        $post->image = $request->get('image');
        $post->save();
        return view('pages.post-page', ['post' => $post])->with('success', 'El Post ha sido creado correctamente');
    }
    public function getUpdate(int $id)
    {
        $post = Post::findOrFail($id);
        return view(
            'pages.actions-post-page',
            [
                'type' => 'update',
                'route' => 'posts.update',
                'post' => $post,
                'title' => 'Editar Post',
                'button' => 'Editar Post',
                'form' =>
                [
                    [
                        'field' => 'title',
                        'label' => 'Titulo',
                        'type' => 'text'
                    ],
                    [
                        'field' => 'content',
                        'label' => 'Contenido',
                        'type' => 'textarea'
                    ],
                    [
                        'field' => 'category_id',
                        'label' => 'Categoria',
                        'type' => 'select'
                    ],

                    [
                        'field' => 'author_name',
                        'label' => 'Autor',
                        'type' => 'text'
                    ],
                    [
                        'field' => 'image',
                        'label' => 'Imagen',
                        'type' => 'text'
                    ],
                    
                ],]
        );
    }
    public function update(Request $request, int $id)
    {
        $post = Post::findOrFail($id);
        $post->fill($request->all());
        $post->save();
        return view('pages.post-page', ['post' => $post])->with('success', 'El Post ha sido actualizado correctamente');
    }
    public function delete(int $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts.index')->with('success', 'El Post ha sido eliminado correctamente');
    }
}
