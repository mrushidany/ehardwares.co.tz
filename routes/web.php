<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HardwareCategoriesController;
use App\Http\Controllers\HardwareSubCategoriesController;
use App\Http\Controllers\Settings\DatabaseSettingsController;
use App\Http\Controllers\Stocks\HardwareStockController;
use App\Http\Controllers\Stocks\HardwareStockProfileController;
use App\Http\Controllers\Clients\AccountDetailsController;
use App\Http\Controllers\CMS\ContentManagementController;
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
Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/contact_us', [WebsiteController::class, 'contact_us'])->name('contact_us');
Route::get('/categories', [WebsiteController::class, 'categories'])->name('categories');


// Admin Operations Routes
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

    //HardwareStockProfileController Routes
    Route::get('/hardware_stock_profile/{id}', [HardwareStockProfileController::class, 'profile'])->name('hardware_stock_profile');
    Route::get('/hardware_stock_image/{id}', [HardwareStockProfileController::class, 'image_gallery'])->name('hardware_stock_image');

    // Database Settings
    Route::post('/settings/database/migrate', [DatabaseSettingsController::class, 'db_migrate'])->name('db_migrate');
    Route::post('/settings/database/migrate_rollback', [DatabaseSettingsController::class, 'db_migrate_rollback'])->name('db_migrate_rollback');
    Route::post('/settings/database/clear_cache', [DatabaseSettingsController::class, 'clear_cache'])->name('clear_cache');
});

//Client Account Details
Route::group(['prefix' => 'account'], function() {
    Route::resource('details', AccountDetailsController::class);
});

// Content Management System routes
Route::group(['prefix' => 'cms'], function() {
    Route::get('dashboard', [ContentManagementController::class, 'index'])->name('cms_dashboard');
    Route::get('products', [ContentManagementController::class, 'products'])->name('products');
    Route::post('new_product', [ContentManagementController::class, 'cms_add_new_product'])->name('new_product');
    Route::get('/new_product/list', [ContentManagementController::class, 'new_product_list'])->name('new_product_list');
});

require __DIR__.'/auth.php';
