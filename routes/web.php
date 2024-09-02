<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\SettingController;

use App\Http\Controllers\ProfileController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});
Route::get('/about', function () {

    return Inertia::render('About');
})->name('about');

Route::get('/mydash', function () {
    return Inertia::render('Mydash');
})->middleware(['auth'])->name('mydash');


Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});




Route::middleware('auth')->prefix('admin')->group(function () {
   // SMTP and Site Setting  All Route
    Route::controller(SettingController::class)->group(function () {
        Route::get('/site/setting', 'SiteSetting')->name('site.setting');
        Route::patch('/update/site/setting/{id}', 'UpdateSiteSetting')->name('update.site.setting');
        Route::get('/smtp/setting', 'SmtpSetting')->name('smtp.setting');
        Route::patch('/update/smpt/setting/{id}', 'UpdateSmtpSetting')->name('update.smpt.setting');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
