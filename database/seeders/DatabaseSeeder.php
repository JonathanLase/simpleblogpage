<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Posts;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Jonathan Lase',
            'username' => 'jonathanlase',
            'email' => 'jonathanclase4@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(5)->create();
        Posts::factory(20)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
        'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);




        // User::create([
        //     'name' => 'Stevan Maxxwell',
        //     'email' => 'stevanmaxxwell@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // Posts::create([
        //     'title' => 'Judul pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'keren',
        //     'body' => 'keren banget loch',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Posts::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'keren',
        //     'body' => 'keren banget loch',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Posts::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'keren',
        //     'body' => 'keren banget loch',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
