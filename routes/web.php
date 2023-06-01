<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DaftarMitraController;

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
    return view('welcome');
})->name('landingPage');

// HOME TAMPILAN
Route::get('/partnership', [HomeController::class, 'partnership'])->name('partnership');
Route::get('/detailpartner', [HomeController::class, 'detailpartner'])->name('detailpartner');
Route::get('/detailkelas', [HomeController::class, 'detailkelas'])->name('detailkelas');
Route::get('/termofservices', [HomeController::class, 'termofservices'])->name('termofservices');
Route::get('/about', [HomeController::class, 'about'])->name('about');

// LOGIN 
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('register', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



// Route::name('dashboard.')->prefix('dashboard')->group(function () {

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    // Route::get('/admin/home', function () {
    //     return view('cobaan');
    // })->name('admin.home');


    Route::get('dashboardAdmin', function () {
        return view('admin.index');
    })->name('admin.home');

    //MITRA

    // Route::get('mitra', [MitraController::class, 'index'])->name('mitra.index');
    // Route::get('mitra-create', [MitraController::class, 'create'])->name('mitra.create');
    // Route::post('mitra-store', [MitraController::class, 'store'])->name('mitra.store');
    // Route::get('mitra-edit-{id}', [MitraController::class, 'edit'])->name('mitra.edit');
    // Route::put('mitra-update-{id}', [MitraController::class, 'update'])->name('mitra.update');
    // Route::delete('mitra-delete-{id}', [MitraController::class, 'destroy'])->name('mitra.destroy');

    // USER
    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('user-create', [UserController::class, 'create'])->name('user.create');
    Route::post('user-store', [UserController::class, 'store'])->name('user.store');
    Route::get('user-edit-{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('user-update-{id}', [UserController::class, 'update'])->name('user.update');
    Route::delete('user-delete-{id}', [UserController::class, 'destroy'])->name('user.destroy');


    // Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', function () {
        return view('managerHome');
    })->name('manager.home');
    // Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
// });

//DAFTAR MITRA TAMPILAN
Route::get('mitra-create', [MitraController::class, 'create'])->name('mitra.create');
Route::post('daftarmitra-store', [MitraController::class, 'store'])->name('mitra.store');
Route::get('pendaftaranmitra', [DaftarMitraController::class, 'index'])->name('pendaftaranmitra.index');
Route::post('admin-pendaftaran-{user}-validasi', [DaftarMitraController::class, 'validasi'])->name('daftarmitra.validasi');
