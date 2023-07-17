<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RecruitmentController;
use App\Models\Recruitment;
use Barryvdh\DomPDF\Facade\Pdf;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('rumah');
});

Route::get('/index', function () {
    return view('index');
});

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/create', function () {
    return view('create');
});


Route::resource('products', ProductController::class);

Route::resource('forms', FormController::class);

Route::resource('projects', ProjectController::class);

Route::resource('recruitments', RecruitmentController::class);

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/recruitments/printpdf', [\App\Http\Controllers\RecruitmentController::class, 'printpdf']);

Route::get('/recruitments/json', [\App\Http\Controllers\RecruitmentController::class, 'data'])->name('recruitments.data');

 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::resource('recruitments', RecruitmentController::class);
});
