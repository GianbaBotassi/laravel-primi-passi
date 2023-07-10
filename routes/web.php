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

    $data = [
        'name' => 'Luighi',
        'surname' => 'Pinni'
    ];
    return view('home', $data);
});

Route::get('/contatti', function () {

    $info = [
        'phone' => '+39 3332330254',
        'adress' => 'Via 44 gatti, 5',
        'city' => 'Roma'
    ];

    return view('contatti', $info);
});
Route::get('/dove-siamo', function () {

    $infoPos = [
        'position' => 'Seconda stella a destra, poi dritto fino al mattino.'
    ];
    return view('dove-siamo', $infoPos);
});
Route::get('/about', function () {

    $dataAbout = [
        'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit nemo quibusdam odit inventore dolor quisquam distinctio perferendis sequi! Distinctio voluptas quod libero rerum aliquid. Fugit, maxime nemo. Eligendi, aspernatur dolore.'
    ];
    return view('about', $dataAbout);
});
