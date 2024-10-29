<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/idoc');
});

Route::get('sat',function(){
    return view('welcome');
});