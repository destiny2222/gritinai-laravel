<?php

use App\Http\Controllers\Page\FormController;
use App\Http\Controllers\Page\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('', [PageController::class, 'index'])->name('home-page');
Route::get('about', [PageController::class, 'about'])->name('about-page');
Route::get('services', [PageController::class, 'services'])->name('services-page');
Route::get('blogdetails/{post}', [PageController::class, 'blogdetails'])->name('details-page');
Route::get('mentor', [PageController::class, 'mentorform'])->name('mentorform-page');
Route::post('mentorform', [FormController::class, 'StoreMentor'])->name('mentor-page');
Route::get('mentee', [PageController::class, 'menteeForm'])->name('mentee-page');
Route::get('idea', [PageController::class, 'idea'])->name('idea-page');
Route::get('learn', [PageController::class, 'learn'])->name('learn-page');
Route::get('saff', [PageController::class, 'saff'])->name('saff-page');
Route::get('SaffStore', [PageController::class, 'saffStore'])->name('saffStore-page');

require __DIR__.'/admin.php';
