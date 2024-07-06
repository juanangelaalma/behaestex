<?php

use App\Http\Controllers\BasicInformationController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\WorkExperienceController;
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

Route::post('/cv/work-experiences', [WorkExperienceController::class, 'createWorkExperience']);
Route::patch('/cv/work-experiences/{id}', [WorkExperienceController::class, 'updateWorkExperience']);
Route::delete('/cv/work-experiences/{id}', [WorkExperienceController::class, 'deleteWorkExperience']);

Route::post('/cv/educations', [EducationController::class, 'createEducation']);
Route::patch('/cv/educations/{id}', [EducationController::class, 'updateEducation']);
Route::delete('/cv/educations/{id}', [EducationController::class, 'deleteEducation']);
