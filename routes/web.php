<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\DashboardController;
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

//Landing Page Route
Route::get('/', function () { echo "This page is under construction .....";})->name('home');
Route::get('/landing_page', function () { return view('landing_page');})->name('landing_page');

// Dashboard Controller Routes
Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin', [AdministratorController::class, 'index'])->name('admin');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/settings', [AdministratorController::class, 'settings'])->name('settings');
    Route::get('/admin/settings/all_users', [AdministratorController::class, 'all_users'])->name('all_users');
    Route::get('/admin/settings/add_new_user', [AdministratorController::class, 'add_new_user'])->name('admin_add_user');
    Route::post('admin/settings/save_new_user', [AdministratorController::class, 'save_new_user'])->name('save_new_user');


});


require __DIR__.'/auth.php';
