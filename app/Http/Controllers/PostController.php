<?php

namespace App\Http\Controllers;

// use App\Models\PostModel;
use App\Models\User;
use App\Models\Posts;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // protected $model;
    // public function __construct()
    // {
    //     $this->model = new PostsModel();
    // } 
    public function index()
    {
        $title = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts', [
            'title' => 'All Posts' . $title,
            'active' => 'posts',
            'posts' => Posts::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()

        ]);
    }

    public function show(Posts $post)
    {
        return view('post', [
            'title' => 'Single Post',
            'active' => 'posts',
            'post' => $post
        ]);
    }
    
}
