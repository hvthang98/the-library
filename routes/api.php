<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::group([
    'prefix' => 'product',
    'name' => 'product.',
], function() {
    Route::get('/', [ProductController::class, 'index']);
});