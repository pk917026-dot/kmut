<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\PublicDashboardController;
Route::get('/', function () {
    return view('public.home');
});

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index']);
});
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\ClaimsController;
use App\Http\Controllers\Admin\MembersController;
use App\Http\Controllers\Admin\ReportsController;
use App\Http\Controllers\Admin\FundController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\CommunicationController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\RolesController;
use App\Http\Controllers\Admin\TeamController;

Route::prefix('admin')->group(function () {

    Route::get('/', [AdminDashboardController::class, 'index']);
Route::view('/admin/coming-soon', 'admin.coming-soon');
    Route::get('/claims/{any?}', [ClaimsController::class, 'index']);
    Route::get('/members/{any?}', [MembersController::class, 'index']);
    Route::get('/reports/{any?}', [ReportsController::class, 'index']);
    Route::get('/funds/{any?}', [FundController::class, 'index']);
    Route::get('/content/{any?}', [ContentController::class, 'index']);
    Route::get('/communication/{any?}', [CommunicationController::class, 'index']);
    Route::get('/settings/{any?}', [SettingsController::class, 'index']);
    Route::get('/roles/{any?}', [RolesController::class, 'index']);
    Route::get('/team/{any?}', [TeamController::class, 'index']);
Route::get('/admin/members/{any?}', function () {
    return view('admin.coming-soon');
});

});
