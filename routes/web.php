<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('main-page.home');
})->name('home');

Route::get('/indikatormutu', function(){
    return view('main-page.indikatormutu');
})->name('indikatormutu');