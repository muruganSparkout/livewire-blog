<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Admin\Auth\Login;
use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Admin\Category as AdminCategory;

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

Route::view('/', 'home');


Route::middleware(['guest:admins'])->group(function () {
    Route::get('/admin/login',Login::class)->name('admin.login');
    Route::prefix('/admin')->group(function (){
        Route::get('/dashboard',Dashboard::class)->name('admin.dashboard');
        Route::get('/category',AdminCategory::class)->name('admin.category');
    });
});
