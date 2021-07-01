<?php

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
    return view('welcome');
});

Route::get('/home', 'HomeController@home');
Route::get('/upload', 'UploadController@upload');

Route::get('/my_profile', 'ProfilController@my_profile'); //nanti route diganti /namauser
Route::get('/my_profile', 'ProfilController@my_profile');
Route::get('/my_profile/post', 'ProfilController@my_profile_post');
Route::get('/my_profile/comment', 'ProfilController@my_profile_comment');

Route::get('/setting', 'ProfilController@setting');
Route::get('/setting_password', 'ProfilController@setting_password');