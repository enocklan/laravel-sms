<?php

use App\Livewire\Admin\Account\AdminCredentials;
use App\Livewire\Admin\Account\AdminProfile;
use App\Livewire\Admin\AdminHome;
use App\Livewire\Admin\Students\AddStudent;
use App\Livewire\Admin\Students\EditStudent;
use App\Livewire\Admin\Students\ListStudent;
use App\Livewire\Auth\Admin\AdminForgot;
use App\Livewire\Auth\Admin\AdminLogin;
use App\Livewire\Auth\Admin\AdminReset;
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Reset;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// User Routes
Route::group([
    'prefix' => 'user'
], function (){
    Route::get('login', Login::class)->name('login');
    Route::get('register', Register::class)->name('register');
    Route::get('forgot-password', ForgotPassword::class)->name('forgot-password');
    Route::get('reset-password/{token}', Reset::class)->name('reset-password');
});


Route::group([
    'prefix' => 'admin'
],function (){
    Route::get('login', AdminLogin::class)->name('admin.login');
    Route::get('forgot-password', AdminForgot::class)->name('admin.forgot-password');
    Route::get('reset-password/{token}', AdminReset::class)->name('password.reset');

    Route::get('home', AdminHome::class)->name('home');

    Route::group([
        'prefix' => 'account'
    ], function () {
        Route::get('profile', AdminProfile::class)->name('admin.profile');
        Route::get('credentials', AdminCredentials::class)->name('admin.credentials');
    });

    Route::group([
        'prefix' => 'students'
    ], function (){
       Route::get('add', AddStudent::class)->name('admin.student.add');
       Route::get('edit', EditStudent::class)->name('admin.student.edit');
       Route::get('list', ListStudent::class)->name('admin.student.list');
    });
});
