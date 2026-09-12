<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| PUBLIC CONTROLLERS
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RfqRequestController;


/*
|--------------------------------------------------------------------------
| ADMIN CONTROLLERS
|--------------------------------------------------------------------------
*/

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DownloadController as AdminDownloadController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\RfqController;
use App\Http\Controllers\Admin\SettingController;


/*
|--------------------------------------------------------------------------
| PUBLIC WEBSITE
|--------------------------------------------------------------------------
*/


// HOME

Route::get('/', function () {

    return view('public.home');
})->name('home');


// ABOUT

Route::get('/about', function () {

    return view('public.about.about');
})->name('about');


// SERVICES

Route::get('/services', function () {

    return view('public.services.services');
})->name('services');


// PROJECTS

Route::get('/projects', [ProjectController::class, 'index'])
    ->name('projects');

Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])
    ->name('projects.show');


// NEWS

Route::get('/news', [NewsController::class, 'index'])
    ->name('news');

Route::get('/news/{news:slug}', [NewsController::class, 'show'])
    ->name('news.show');


// DOWNLOADS

Route::get('/downloads', [DownloadController::class, 'index'])
    ->name('downloads');

Route::get('/downloads/{download}/download', [DownloadController::class, 'download'])
    ->name('downloads.download');


// CONTACT

Route::get('/contact', function () {

    return view('public.contact.contact');
})->name('contact');


// CONTACT FORM SUBMISSION

Route::post('/contact', [ContactMessageController::class, 'store'])
    ->name('contact.store');


// REQUEST FOR QUOTE

Route::get('/rfq', function () {

    return view('public.rfq.rfq');
})->name('rfq');


// RFQ FORM SUBMISSION

Route::post('/rfq', [RfqRequestController::class, 'store'])
    ->name('rfq.store');


/*
|--------------------------------------------------------------------------
| ADMIN AUTHENTICATION
|--------------------------------------------------------------------------
*/


// ADMIN LOGIN PAGE

Route::get('/admin/login', [AuthController::class, 'showLogin'])
    ->name('admin.login');


// ADMIN LOGIN PROCESS

Route::post('/admin/login', [AuthController::class, 'login'])
    ->name('admin.login.submit');


/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::middleware('auth')
    ->prefix('admin')
    ->group(function () {


        /*
        |--------------------------------------------------------------------------
        | DASHBOARD
        |--------------------------------------------------------------------------
        */

        Route::get('/dashboard', [DashboardController::class, 'index'])
            ->name('admin.dashboard');


        /*
        |--------------------------------------------------------------------------
        | SETTINGS
        |--------------------------------------------------------------------------
        */

        Route::get('/settings', [SettingController::class, 'index'])
            ->name('admin.settings.index');

        Route::put('/settings', [SettingController::class, 'update'])
            ->name('admin.settings.update');


        /*
        |--------------------------------------------------------------------------
        | MESSAGES
        |--------------------------------------------------------------------------
        */

        Route::get('/messages', [MessageController::class, 'index'])
            ->name('admin.messages.index');

        Route::get('/messages/{message}', [MessageController::class, 'show'])
            ->name('admin.messages.show');

        Route::delete('/messages/{message}', [MessageController::class, 'destroy'])
            ->name('admin.messages.destroy');


        /*
        |--------------------------------------------------------------------------
        | REQUEST FOR QUOTE
        |--------------------------------------------------------------------------
        */

        Route::get('/rfq', [RfqController::class, 'index'])
            ->name('admin.rfq.index');

        Route::get('/rfq/{rfq}', [RfqController::class, 'show'])
            ->name('admin.rfq.show');

        Route::delete('/rfq/{rfq}', [RfqController::class, 'destroy'])
            ->name('admin.rfq.destroy');


        /*
        |--------------------------------------------------------------------------
        | PROJECTS
        |--------------------------------------------------------------------------
        */

        Route::resource('projects', AdminProjectController::class)
            ->names('admin.projects');


        /*
        |--------------------------------------------------------------------------
        | NEWS
        |--------------------------------------------------------------------------
        */

        Route::resource('news', AdminNewsController::class)
            ->names('admin.news');


        /*
        |--------------------------------------------------------------------------
        | DOWNLOADS
        |--------------------------------------------------------------------------
        */

        Route::resource('downloads', AdminDownloadController::class)
            ->names('admin.downloads');


        /*
        |--------------------------------------------------------------------------
        | ADMIN LOGOUT
        |--------------------------------------------------------------------------
        */

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('admin.logout');
    });
