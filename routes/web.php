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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::livewire("/","home");
Route::livewire("social","social-links");
Route::livewire("addpost","addposts");
Route::livewire("/about","about");
Route::livewire("/test","test");
Route::livewire("/admin","admin")->middleware('superadmin');

Route::livewire("/message","message");
