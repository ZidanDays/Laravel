<?php

namespace Database\Seeders;

//memangil data model, karna kita ingin buat seeder utk 3 buah model maka deklarasikan/call 3 model
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
                // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Post::create([
            'name' => 'Zidan Dailer',
            'email' => 'zidan.dailer@gmail.com',
            'password' => bcrypt('2103')
        ]);

        Category::create([
            'name'=> 'Web Programming',
            'slug'=> 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' =>
        ])

    }
}
