<?php
//koneksi ke model
use App\Models\Post;
use App\Models\Category;
use App\Models\Role;
use Illuminate\Support\Facades\Route;
//koneksi ke controller
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//home
Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});


//about
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Muhammad Zidan Dailer",
        "email" => "zidan.dailer@gmail.com",
        "image" => "4x6.jpg"
    ]);
});


//blog
Route::get('/blog', [PostController::class, 'index']);


//halaman single post
Route::get('post/{slug}', [PostController::class, 'show']);

//categories
Route::get('/categories', function(){
    return view('categories',[
        'title' => 'Posts Catgories',
        'categories' => Category::all()
    ]);
});


//category
Route::get('/categories/{category:slug}', function (Category $category){
    return view ('category',[
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

//Route::get('post/{slug}', [PostController::class, 'show']);

//projetc crud, post itu modelnya  roleController itu controllernya
Route::resource('crud', RoleController::class);
// Route::get('/index',[RoleController::class, 'index']);
// Route::get('crud/create',[RoleController::class, 'create']);
// // Route::get('')


//jika ingin mengakses roleController di atas maka harus menggunakan []
//sebenarnya namespace dari sebuah model tidak akan terpakai disini