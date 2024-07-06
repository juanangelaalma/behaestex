<?php

use App\Http\Controllers\BasicInformationController;
use App\Http\Controllers\CVController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/cv', [CVController::class, 'getFullCV']);
Route::patch('/cv/basic-information', [BasicInformationController::class, 'patchBasicInformation']);
