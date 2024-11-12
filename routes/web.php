<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\photoController;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Faker\Guesser\Name;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('galeri');
});

Route::get('/photos/create', [PhotoController::class, 'create'])->name('photos.create');
Route::post('/photos', [PhotoController::class, 'store'])->name('photos.store');
Route::get('/photos', [PhotoController::class, 'index'])->name('photos.index');
Route::delete('/photos/{photo}', [PhotoController::class, 'destroy'])->name('photos.destroy');

Route::get('/dashboard/album', [PhotoController::class, 'album'])->name('dashboard.album');

Route::get('/dashboard/setting', [ArtikelController::class, 'setting'])->name('dashboard.setting');
Route::get('/dashboard/setting', [SettingController::class, 'index'])->name('setting.index');

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/galeri', function () {
    return view('galeri');
})->middleware('auth')->name('galeri');

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/', function () {
    });
});

Route::resource('artikel', ArtikelController::class);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::get('/dashboard/album', [DashboardController::class, 'album'])->name('dashboard.album'); 
Route::get('/dashboard/artikel', [DashboardController::class, 'artikel'])->name('dashboard.artikel');
Route::get('/dashboard/user', [DashboardController::class, 'user'])->name('dashboard.user');
Route::get('/dashboard/setting', [DashboardController::class, 'setting'])->name('dashboard.setting');
Route::get('/dashboard/cartikel', [DashboardController::class, 'cartikel'])->name('dashboard.cartikel');
Route::get('/dashboard/album', [AlbumController::class, 'index'])->name('album.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
});


Route::get('/contact', function () {
    return view('contact');
});



