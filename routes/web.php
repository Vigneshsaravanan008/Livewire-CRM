<?php

use App\Livewire\Customer;
use App\Livewire\Dashboard;
use App\Livewire\ForgetPassword;
use App\Livewire\Login;
use App\Livewire\Project;
use App\Livewire\Register;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', Login::class)->name('auth.login');
Route::get('/register', Register::class)->name('auth.register');
Route::get('/forget-password', ForgetPassword::class)->name('auth.forget-password');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', Dashboard::class)->name('user.dashboard');

    Route::get('/customer',Customer::class)->name('user.customer');
    Route::get('/project',Project::class)->name('user.project');
});
