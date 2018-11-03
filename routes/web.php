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

Route::get('/', 'PagesController@index');

Route::get('/page-0/{typeOfLandscape?}/{name?}',
      function ($typeOfLandscape = null, $name = null) {
    return 'page-0 ' . $name . ': ' .
      'I like ' . $typeOfLandscape .
      ' landscapes.';
});

Route::get('/page-1', function () {
    return view('pages.page-1');
});

Route::get('/about', function () {
    return view('pages.about');
});
