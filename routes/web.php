<?php

Route::get('/', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@show');

Route::get('about', function () {
    return view('pages.about');
});

Route::post('newsletter', 'NewsletterController@subscribe');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
