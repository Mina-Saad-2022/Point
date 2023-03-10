<!--*******************           Route Dashboard           *******************-->

<?php

use App\Http\Controllers\dashboard\dashboard_controller;
use App\Http\Controllers\dashboard\admin_controller;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect',
    'localizationRedirect', 'localeViewPath']], function () {
    Auth::routes();
    Route::group(['prefix' => 'dashboard/admin', 'as' => 'dashboard.'], function () {



    /************************* open  home page *************************/

        Route::get('/index', [dashboard_controller::class, 'index'])->name('view_home_page');



    /*********************** open  admin page ***********************/

        Route::get('/All', [admin_controller::class, 'index'])->name('view_admin_page');


    /*********************** open  delete admin ***********************/

        Route::delete('/delete', [admin_controller::class, 'destroy'])->name('delete_admin');


    /*********************** open  edit admin ***********************/

        Route::get('/edit/{id}', [admin_controller::class, 'edit'])->name('edit_admin');


        /************** open  create new user page by admin **************/

        Route::get('/create', [admin_controller::class, 'create'])->name('view_create_page');


    });
});




