<?php

Route::get('/', function () {
    $posts = App\Post::paginate(3);

    return view('pages.home', compact('posts'));
});

Route::get('blog/{slug}', 'BlogController@show');

Route::get('about', function(){
   return view('pages.about');
});

Route::post('newsletter', 'NewsletterController@subscribe');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
