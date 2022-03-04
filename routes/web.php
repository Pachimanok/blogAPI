<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $post = Post::orderBy('id', 'DESC')->take(6)->get();
    
    return view('welcome')->with('posts',$post);
});

Route::resource('prueba','App\Http\Controllers\pruebaController');
Route::resource('post','App\Http\Controllers\postController');



Route::get('/home', function () {
   
    $user = Auth::user();
    $post = Post::orderBy('id', 'DESC')->where('user_id','=',$user->id)->paginate(5);
    $tags = Tag::all();
    $categories = Category::all();
    $qcat = $categories->count();
    $qtag = $tags->count();
    
    return view('home')->with('posts',$post)->with('tags',$tags)->with('categories',$categories)->with('qcat',$qcat)->with('qtag',$qtag);    
});

Route::middleware(['cors'])->group(function () {
    Route::post('/hogehoge', 'Controller@hogehoge');
});