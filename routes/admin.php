<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductEnquireController;
use App\Http\Controllers\Admin\StoreController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('login', [AuthController::class, "index"])->name('login');
Route::post('login', [AuthController::class, 'store'])->name('store');

Route::middleware(["admin"])->group(
    function () {

        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::resource('partners', PartnerController::class);
        Route::resource('store', StoreController::class);
        Route::resource('product', ProductController::class);
        Route::resource('banner', BannerController::class);
        Route::resource('productenquire', ProductEnquireController::class);
        Route::get('/settings', [ContactController::class, 'setting'])->name('setting');
        Route::post('/settingdetails', [ContactController::class, 'settingdetails'])->name('settingdetails');
        Route::get('contacts', [ContactController::class, 'contact'])->name('contact');
        Route::delete('contactdelete/{contact}', [ContactController::class, 'contactdelete'])->name('contactdelete');
        Route::resource('csvs', EmailController::class);
        Route::get('csvs/getemail/{getemail}', [EmailController::class, "getemail"])->name('getemail');
        Route::post('/createnewsletter', [EmailController::class, "newslettercreate"])->name('newsletter.create');
        Route::post('/newsletteremail', [EmailController::class, 'email'])->name('newsletter.email');
        Route::get('/admin/contacts/export', [ContactController::class, 'export'])->name('admin.contacts.export');
        Route::resource('teams', TeamController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('blogs', BlogController::class);


    }
);
