<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Request $request)
    {

        $categoryId = $request->get('category_id');
        if ($categoryId) {
            $posts = Post::where('category_id', $categoryId)->orderBy('created_at', 'desc')->paginate(10);
        } else {
            $posts = Post::paginate(10);
        }

        return view('pages.post-page', [
            'posts' => $posts, 
            'categories' => Category::all()
        ]);
    }

    public function show(string $slug)
    {
        $post = Post::where(['slug' => $slug])->first();
        return view('pages.post-page', ['post' => $post]);
    }

    private function countPosts($value): bool
    {
        $post = new Post();
        $count = $post::where('is_published', $value)->get();
        $postsPending = count($count);
        return $postsPending;
    }

    public function getCreate()
    {

        $postsPending = $this->countPosts(false);

        return view(
            'pages.actions-post-page',
            [
                'type' => 'create',
                'postsPending' => $postsPending,
                'route' => 'posts.create',
                'title' => 'Nuevo Post',
                'button' => 'Crear Post',
                'categories' => Category::all(),
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
                'categories' => Category::all(),
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
