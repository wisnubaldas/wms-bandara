<?php

use Illuminate\Support\Facades\Route;

// sesuaikan dulu kontroller nya
use App\Http\Controllers\Ctos\ContLoginController;

Route::controller(ContLoginController::class)->group(function () {
    Route::get('Cont_Login/get_list_logindepartmen/{employNumber}', 'get_list_logindepartmen');
});