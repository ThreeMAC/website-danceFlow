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
    return view('home');
});


Route::get('/tryout', function (){
    return view('tryout');
});

Route::get('/homepage', function (){
    return view('homepage');
});

//Route::get('/tryout', function (){
//    return view('tryout2');
//});
//
//Route::get('/myModel/metadata.json', [App\http\Controllers\fileController::class, 'metadata'] );
//
//Route::get('/myModel/model.json', [App\http\Controllers\fileController::class, 'model'] );
