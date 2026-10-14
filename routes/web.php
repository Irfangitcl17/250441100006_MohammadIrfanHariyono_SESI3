<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SewaController;

Route::get('/', fn () => redirect()->route('sewa.index'));
Route::resource('sewa',SewaController::class);
