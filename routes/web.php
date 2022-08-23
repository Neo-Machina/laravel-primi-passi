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
        "discs" => [
            [
                'artist' => 'Iggy Pop',
                'album' => 'Lust for Life',
                'release_year' => 1977
            ],
            [
                'artist' => 'King Crimson',
                'album' => 'In the Court of the Crimson King',
                'release_year' => 1969
            ],
            [
                'artist' => 'Low Roar',
                'album' => 'Low Roar',
                'release_year' => 2011
            ]
        ]
    ];

    return view('home', $data);
})->name('home');

Route::get('/Pre-order-your-tickets', function () {

    return view('concert');
})->name('concert');

Route::get('/store', function () {

    return view('store');
})->name('store');

Route::get('/about-us', function () {

    return view('info');
})->name('info');


