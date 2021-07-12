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
Route::get('/film', function () {
    $film=[
        'title'=>'Avengers',
        'year'=>'2018',
        'vote'=>[4],
        'actors'=>['pinco','pallo','pallino']
    ];
    return view('film-list',$film);
});

