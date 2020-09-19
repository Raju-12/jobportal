<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ApplicantController;
use RealRashid\SweetAlert\Facades\Alert;

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

Route::get('/', function () {
//Alert::success('Success Title', 'Success Message');
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//***************Company*************

Route::get('/company',[CompanyController::class,'index']);
Route::get('/register',[CompanyController::class,'register']);
Route::post('/login',[CompanyController::class,'login_check']);
Route::post('/c-registration',[CompanyController::class,'registration']);
Route::get('/c-dashboard',[CompanyController::class,'dashboard']);
Route::get('/job-post',[CompanyController::class,'job_post']);
Route::post('/add-detail',[CompanyController::class,'add_details']);
Route::get('/resume/{aplicant}',[CompanyController::class,'download']);


//******************Applicant************

Route::get('/applicant',[ApplicantController::class,'index']);
Route::get('/aregister',[ApplicantController::class,'register']);
Route::get('/a-login',[ApplicantController::class,'login']);
Route::post('/alogin',[ApplicantController::class,'login_check']);
//Route::get('/show-apllicant',[ApplicantController::class,'show_applicant']);
Route::post('/a-registration',[ApplicantController::class,'registration']);
Route::post('/upload-profile',[ApplicantController::class,'upload_profile']);
//Route::get('/download/{id}',[ApplicantController::class,'download_file']);
Route::get('/show-job',[ApplicantController::class,'show_job']);
Route::post('/apply-job',[ApplicantController::class,'apply_job']);



