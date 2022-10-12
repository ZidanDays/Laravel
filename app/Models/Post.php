<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

        // jaga field id saja, sisanya bisa diisi pake massaAsignmenet id aja
        protected $guarded = ['id'];
        // protected $fillable = [code, name, description];
        // protected $filable = ['title', 'slug', 'excerpt', 'body'];

        public function Category()
        {
            return $this->belongsTo(Category::class);
        }
}