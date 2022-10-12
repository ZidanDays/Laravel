<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    // jaga field id saja, sisanya bisa diisi pake massaAsignmenet id aja
    protected $guarded = ['id'];

    public function Posts(){
        return $this->hasMany(Post::class);
    }
}

// post::create([
//     'title'=>'Judul programming',
//     'slug'=>'judul-programming',
//     'category_id' => 1,
//     'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate odio tempore nulla dolorum non saepe inventore',
//     'body'=>'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, illum error fugit ducimus vel accusantium possimus</p><p>soluta voluptatum dolorem quae provident tempore illo nesciunt minima natus nemo quam </p><p>hic dolore in, asperiores esse aliquid iusto nam? Asperiores assumenda debitis harum officia odio. Aperiam, ea voluptate.</p>'
// ])