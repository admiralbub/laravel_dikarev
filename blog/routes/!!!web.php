<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
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
    return view('home');
})->middleware('auth');
//Вход в админку строго если пользователь имеет права админа

Route::prefix('admin')->name('admin.')->middleware('admin')->group(function() {
    Route::resource('/', App\Http\Controllers\Admin\HomeController::class);
    

    Route::resource('/articles', App\Http\Controllers\Admin\ArticleController::class);

    //Route::resource('/articles/add_article', 'ArticleController@store');
});



Auth::routes();
//Переход на главную страницу

//Выход из авторизации
Route::get('logoout/', function () {
    return view('home');
});


Route::get('/blog/{id}', [App\Http\Controllers\BlogController::class, 'show']);
