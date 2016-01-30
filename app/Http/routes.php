<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('orm', function () {
    // App\Post::create([
    // 	'title'=>'title',
    // 	'content'=>'content',
    // 	'is_feature' =>false,    
    // ]);

	//$post = new \App\Post;
    // $post->title ='ntitle';
    // $post->content = 'ncontent';
    // $post->is_feature = false;
    // $post->save();

    // $posts =\App\Post::all();
    // dd($posts);

	// $posts = \App\Post::find(1);
	// dd($posts);

	$posts = \App\Post::where('id','<',10)->orwhere('title','=','title')->get();
	dd($posts);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
