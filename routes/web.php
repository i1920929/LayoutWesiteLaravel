<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
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

Route::get('/', 'Web\HomeController@index');
Route::get('/about', 'Web\Perfil\ProfileController@about');
Route::get('/services', 'Web\Perfil\ProfileController@services');
Route::get('/blog', 'Web\Perfil\ProfileController@blog');
Route::get('/contact', 'Web\Perfil\ProfileController@contact');
/*

Route::get('/', function () {
    return view('welcome');
});
*/