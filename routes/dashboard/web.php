<!--*******************           Route Dashboard           *******************-->

<?php

use App\Http\Controllers\dashboard\dashboard_controller;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect',
    'localizationRedirect', 'localeViewPath']], function () {
    Auth::routes();
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/index', [dashboard_controller::class, 'index'])->name('index');
    });
});




