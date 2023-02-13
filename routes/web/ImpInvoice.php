<?php

use Illuminate\Support\Facades\Route;

// sesuaikan dulu kontroller nya
use App\Http\Controllers\ImpInvoiceheaderController;

Route::controller(ImpInvoiceheaderController::class)->group(function () {
    Route::get('all', 'all');
});