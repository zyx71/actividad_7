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
use App\Http\Controllers\UserController;
use App\Http\Controllers\LearningGroupController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DidacticMaterialController;

Route::resource('users', UserController::class);
Route::resource('groups', LearningGroupController::class);
Route::resource('courses', CourseController::class);
Route::resource('materials', DidacticMaterialController::class);


Route::get('/', function () {
    return view('home');
});

