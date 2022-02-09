<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HardwareCategoriesController;
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
Route::get('/landing_page', function () { return view('ecommerce.website.index');})->name('landing_page');

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {

    // Dashboard Controller Routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Administrator Controller Routes
    Route::get('/', [AdministratorController::class, 'index'])->name('admin');
    Route::get('/settings', [AdministratorController::class, 'settings'])->name('settings');
    Route::get('/settings/all_users', [AdministratorController::class, 'all_users'])->name('all_users');
    Route::get('/settings/add_new_user', [AdministratorController::class, 'add_new_user'])->name('admin_add_user');
    Route::post('/settings/save_new_user', [AdministratorController::class, 'save_new_user'])->name('save_new_user');
    Route::get('/profile', [AdministratorController::class, 'profile'])->name('admin_profile');

    // Hardware Controllers Routes
    Route::resource('/hardware_categories', HardwareCategoriesController::class)->only('index');

    Route::post('/hardware_categories/save_hadware_category', [HardwareCategoriesController::class, 'store'])->name('save_hardware_category');
    Route::get('/hardware_categories/list', [HardwareCategoriesController::class, 'hardware_category_list'])->name('hardware_category_list');


});


require __DIR__.'/auth.php';
