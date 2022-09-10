<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\LoginComponent;
use App\Http\Livewire\Auth\RegisterComponent;
use App\Http\Livewire\Auth\ResetPasswordComponent;
use App\Http\Livewire\Auth\ForgotPasswordComponent;
use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\Auth\ConfirmPasswordComponent;

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
// Route::get('/', WelcomeComponent::class)->name('welcome');

Route::get('/dashboard', DashboardComponent::class)->name('dashboard');

Route::get('/login', LoginComponent::class)->name('login');
Route::get('/register', RegisterComponent::class)->name('register');
// Route::get('/user/confirmed-password-status', ConfirmPasswordComponent::class)->name('password.confirmation');
// Route::get('/forgot-password', ForgotPasswordComponent::class)->name('password.request');
// Route::get('/reset-password/{token}', ResetPasswordComponent::class)->name('password.reset');


     //Language Change
     Route::get('lang/{locale}', function($locale){
        if( !in_array($locale, ['en', 'es', 'pt', 'fr']) ) {
          abort(400);
        }
        Session()->put('locale', $locale);
        Session()->get('locale');
        App::setLocale($locale);
        return redirect()->back();
      })->name('lang');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),  'verified'])->group(function () {
        Route::prefix('admin')->group(function () {


        });

        Route::prefix('administration')->group(function () {
            // Route::get('/liste-utilisateurs', UserComponent::class)->name('admin.user-index');
        });
});




