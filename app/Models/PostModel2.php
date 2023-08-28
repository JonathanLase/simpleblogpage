<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class PostModel
{
    // use HasFactory;
    private static $blog_posts = [
        [
            'title' => 'judul pertama',
            'slug' => 'contoh-satu',
            'author' => 'jsnjksjsvn',
            'body' => 'nanfjkenjfnjfjsskvbjksbdvjkdsjvbsbsj'
        ],
        [
            'title' => 'judul kedua',
            'slug' => 'contoh-dua',
            'author' => 'lkanslnlsvknskvnksdlkvd',
            'body' => 'bjfbbjbfabjfbsbjbdsjbvbsdjbvbsdv'
        ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts =  static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p['slug'] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug); //pakai collect
    }
}
