<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use App\Http\Controllers\Auth\CheckAdmin;
use App\Http\Controllers\Auth\SocialLogin;
use Laravel\Socialite\Facades\Socialite; 
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
// Socialite Routes
Route::get('/google/login', [SocialLogin::class,'RedirectToGoogle']);
Route::get('/google/register', [SocialLogin::class,'RedirectToGoogle']);

Route::get('/google/login/callback', [SocialLogin::class,'GoogleCallback']);











Route::get('/', function () {        
    return view('app');
});
Route::get('/admin',[CheckAdmin::class,'index'])->name('admin.dashboard');
    
require __DIR__.'/auth.php';
