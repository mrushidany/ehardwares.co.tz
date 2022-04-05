<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HardwareCategoriesController;
use App\Http\Controllers\HardwareSubCategoriesController;
use App\Http\Controllers\Settings\DatabaseSettingsController;
use App\Http\Controllers\Stocks\HardwareStockController;
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
Route::get('/', function () { return view('ecommerce.website.home');})->name('home');
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
    Route::get('/settings/all_users_list', [AdministratorController::class, 'all_users_list'])->name('all_users_list');
    Route::get('/settings/app', [AdministratorController::class, 'app_settings'])->name('app_settings');


    // Hardware Controllers Routes
    Route::resource('/hardware_categories', HardwareCategoriesController::class)->only(['index','edit','update', 'destroy']);
    Route::post('/hardware_categories/save_hardware_category', [HardwareCategoriesController::class, 'store'])->name('save_hardware_category');
    Route::get('/hardware_categories/list', [HardwareCategoriesController::class, 'hardware_category_list'])->name('hardware_category_list');

    Route::resource('/hardware_sub_categories', HardwareSubCategoriesController::class)->only(['index', 'destroy']);
    Route::post('/hardware_categories/save_hardware_sub_category', [HardwareSubCategoriesController::class, 'store'])->name('save_hardware_sub_category');
    Route::get('/hardware_categories/sub_category_list', [HardwareSubCategoriesController::class, 'hardware_sub_category_list'])->name('hardware_sub_category_list');

    //HardwareStockController
    Route::resource('/hardware_stock', HardwareStockController::class);
    Route::get('/hardware_stock_list', [HardwareStockController::class, 'stock_list'])->name('stock_list');


    // Database Settings
    Route::post('/settings/database/migrate', [DatabaseSettingsController::class, 'db_migrate'])->name('db_migrate');
    Route::post('/settings/database/migrate_rollback', [DatabaseSettingsController::class, 'db_migrate_rollback'])->name('db_migrate_rollback');
    Route::post('/settings/database/clear_cache', [DatabaseSettingsController::class, 'clear_cache'])->name('clear_cache');


});


require __DIR__.'/auth.php';
