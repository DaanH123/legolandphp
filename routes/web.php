<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttractionsController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpentimeController;
use App\Http\Controllers\OrderticketsController;
use App\Http\Controllers\TicketsController;
use Illuminate\Support\Facades\Route;

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

// Default route (naar de homepage)
Route::get('/', [HomeController::class, 'index'])->name('home');


// Route naar de home pagina
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route naar de tickets pagina
Route::get('/tickets', [TicketsController::class, 'showTicketsPage'])->name('tickets');

// Route naar de attracrions pagina
Route::get('/attractions', [AttractionsController::class, 'showAttractionsPage'])->name('attractions');

// Route naar de opentimes pagina
Route::get('/opentimes', [OpentimeController::class, 'index'])->name('opentime');

// Route naar de contact pagina
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//Post form naar de contact controller
Route::post('postContactForm', [ContactController::class, 'store']);

//R Route naar de order pagina
Route::get('/order', [OrderticketsController::class, 'index'])->name('order');

// Route om het order form te posten
Route::post('orderticket', [OrderticketsController::class, 'store']);

// Route naar de order completed pagina
Route::get('/orderconfirmation', function () {
    return view('ordercompleted');
})->name('orderconfirmation');

Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
Route::get('/dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
