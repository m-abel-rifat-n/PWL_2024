<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/hello', function () {
//  return 'Hello World';
// });

Route::get('/world', function () {
 return 'World';
});

Route::get('/about', function () {
    return '2241760045/Abel';
   });

   Route::get('/', function () {
    return 'Selamat Datang';
   });

//    Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
//     });
    
    Route::get('/posts/{post}/comments/{comment}', function
    ($postId, $commentId) {
     return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });
    
    Route::get('/articles/{id}', function($id) {
        return 'Halaman Artikel dengan ID ' . $id;
    });

    // Route::get('/user/{name?}', function ($name=null) {
    //     return 'Nama saya '.$name;
    // });

    Route::get('/user/{name?}', function ($name='John') {
        return 'Nama saya '.$name;
        });
        
    
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/hello', [WelcomeController::class, 'hello']);

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'show']);
Route::get('/articles/{id}', [ArticleController::class, 'show']);


use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
//    ]);
//    Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
//    ]);


Route::get('/greeting', [WelcomeController::class,
'greeting']);