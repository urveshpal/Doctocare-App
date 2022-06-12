<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Doctor\LoginController;
use App\Http\Controllers\Doctor\SignupController;
use App\Http\Controllers\Doctor\Dashboard;
use App\Http\Controllers\Doctor\CreateProfile;
use App\Http\Controllers\Doctor\DoctorsController;
use App\Http\Controllers\Doctor\DoctorsProfileController;
use App\Http\Controllers\User\CategoryController;

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

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/doctor_login', [LoginController::class, 'index']);
Route::get('/doctor_signup', [SignupController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/view_doctors/{id}', [DoctorsController::class, 'index']);
Route::get('/doctor_profile', [DoctorsProfileController::class, 'index']);
Route::get('/doc_dashboard', [Dashboard::class, 'index']);
Route::get('/create_profile', [CreateProfile::class, 'index']);
Route::post('/register', [CreateProfile::class, 'store']);


Route::get('/add_category', function(){
    return view ('admin.addCategory');
});
Route::get('/dashboard/{id}', function(){
    return view ('user.dashboard');
});
