<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('backend.master');
});

Route::get('/applicant/create',[ApplicantController::class, 'create'])->name('applicant-create');

Route::post('applicant/office',[ApplicantController::class,'store'])->name(('applicant-office-store'));

Route::get('/applicant/index',[ApplicantController::class, 'index'])->name('applicant-index');

Route::delete('applicant/delete/{id}', [ApplicantController::class, 'destroy'])->name('applicant-delete');

Route::get('/applicant/edit/{id}', [ApplicantController::class, 'edit'])->name('applicant-edit');

Route::put('/applicant/update/{id}', [ApplicantController::class, 'update'])->name('applicant-update');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
