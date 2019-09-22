<?php

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

use App\Category;
use App\Comment;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;
use App\Post;
use App\Image;
use App\Video;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('add-tag', function(){
//     for ($i = 0 ; $i < 1500; $i++){
//         DB::table('post_tag')->updateOrInsert(
//             ['post_id' =>$faker->numberBetween(1,1500)],
//             ['tag_id'=> $faker -> numberBetween(1,550)]
//         )
//     }
// });


Route::group(['middleware' => ['auth']], function () {
    Route::post('categories', 'CategoryController@store')->name('category.save');
    Route::get('categories', [
        'uses' => 'CategoryController@index',
        'as' => 'categories',
    ]);
    Route::get('category/{id}', [
        'uses' => 'CategoryController@show'
    ]);

    Route::get('tags', 'TagController@index')->name('tags');

    Route::get('tags/{id}', [
        'uses' => 'TagController@show'
    ]);

    Route::post('tags', 'TagController@store')->name('tag.save');


    Route::get(
        'comments/',
        'CommentController@index'
    )->name('comments');
    Route::get('comments/{id}', [
        'uses' => 'CommentController@show'
    ]);

    Route::get('users', 'UserController@index')->name('users');

    Route::get('posts', 'PostController@index')->name('posts');
    Route::get('posts/{id}', 'PostController@show')->name('post.show');
    Route::get('add-post', 'PostController@addPost')->name('post.add');
    Route::post('add-post', 'PostController@store')->name('post.save');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home', 'HomeController@index')->name('home');
