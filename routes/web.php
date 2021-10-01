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
Route::resource('article', 'ArticleController');

Route::get('curl/listuser', 'CurlController@sendRequestListUser');
Route::get('curl/detailuser', 'CurlController@sendRequestDetailUser');
Route::get('login/user', 'LoginUserController@index')->name('login.user');
Route::get('home', 'LoginUserController@home')->name('home');
Route::post('putsession', 'LoginUserController@put')->name('put.session');
Route::post('logout/user', 'LoginUserController@logoutuser')->name('logout.user');

Route::get('/bilangan/prima', function () {

    return view('bilangans.prima');
});

Route::get('/bilangan/genap', function () {

    return view('bilangans.genap');
});

Route::get('/bilangan/ganjil', function () {

    return view('bilangans.ganjil');
});

Route::get('/bilangan/kelipatanlima', function () {

    return view('bilangans.kelipatanlima');
});

Route::get('/pola/segitiga', function () {

    return view('pola.segitiga');
});



Auth::routes();




