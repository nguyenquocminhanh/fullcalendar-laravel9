<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalenderController;

Route::get('/', [CalenderController::class, 'index']);
Route::post('/calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);