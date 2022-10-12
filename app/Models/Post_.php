<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Zidan Dailer",
            "body" => "ara ara kimochi Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Dolorum aliquam maxime pariatur blanditiis quidem eveniet saepe,
            in nesciunt consectetur, quod aperiam nulla corrupti qui delectus eos. Esse
            fugiat voluptas facere hic natus repellendus molestiae. Corporis impedit
            doloremque nobis nesciunt, eum sit accusantium? Sit perferendis labore excepturi,
            mollitia veritatis nihil voluptas ad soluta, laboriosam dolore culpa consequuntur
            odit dicta expedita quod, quibusdam ipsum earum nisi. Ut natus expedita aliquid
            dolorum sapiente quae animi facere, quia dolor."
        ],
        [
            "title" => "Judul Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Udin",
            "body" => "quod aperiam nulla corrupti qui delectus eos. Esse
            fugiat voluptas facere hic natus repellendus molestiae. Corporis impedit
            doloremque nobis nesciunt, eum sit accusantium? Sit perferendis labore excepturi,
            mollitia veritatis nihil voluptas ad soluta, laboriosam dolore culpa consequuntur
            odit dicta expedita quod, quibusdam ipsum earum nisi. Ut natus expedita aliquid
            dolorum sapiente quae animi facere, quia dolor" 
        ]
    ];

    public static function all()
    {
        //make collection()
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    // {
    //     //versi loopingan
    //     $blog_posts = self::$blog_posts;
    //     $post=[];
    //     foreach($blog_posts as $p){
    //         if($p["slug"] === $slug) {
    //             $post = $p;
    //         }
    //     }
    //     return $post;
    // }
            //versi menggunakan collection dan menggunakan fungsi firstwhere(kondisi)
        {
            $posts = static::all();
            return $posts->firstwhere('slug', $slug);
        }
}

