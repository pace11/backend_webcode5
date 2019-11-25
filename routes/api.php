<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'v1'], function() {

    // posts
    Route::get('posts', 'Api\PostsController@index');
    Route::get('post/detail/{alias}', 'Api\PostsController@show');
    Route::get('posts/{limit}', 'Api\PostsController@showByLimit');
    Route::get('post/related/{id}/{alias}', 'Api\PostsController@showPostsRelated');
    Route::get('posts/tag/{title}', 'Api\PostsController@showPostsByTag');

    // tags
    Route::get('tags', 'Api\TagsController@index');
    Route::get('tags/except/{title}', 'Api\TagsController@showTagsExceptByTitle');
    Route::get('tag/detail/{title}', 'Api\TagsController@show');
});
