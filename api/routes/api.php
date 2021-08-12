<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth', 'namespace' => 'App\Http\Controllers\Auth'], function () {
    Route::post('signin', 'SignInController');
    Route::get('me', 'MeController');
    Route::post('signout', 'SignOutController');
});

Route::group(['prefix' => 'snippets', 'namespace' => 'App\Http\Controllers\Snippets'], function () {
    Route::post('', 'SnippetController@store');
    Route::get('{snippet}', 'SnippetController@show');
});
