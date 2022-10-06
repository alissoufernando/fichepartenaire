<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\LoginComponent;
use App\Http\Livewire\Auth\RegisterComponent;
use App\Http\Livewire\Dashboard\WelcomeComponent;
use App\Http\Livewire\Auth\ResetPasswordComponent;
use App\Http\Livewire\Auth\ForgotPasswordComponent;
use App\Http\Livewire\Dashboard\DashboardComponent;
use App\Http\Livewire\Dashboard\Role\RoleComponent;
use App\Http\Livewire\Dashboard\User\UserComponent;
use App\Http\Livewire\Auth\ConfirmPasswordComponent;
use App\Http\Livewire\Dashboard\Objet\ObjetComponent;
use App\Http\Livewire\Site\Partenariat\DetailComponent;
use App\Http\Livewire\Dashboard\Structure\StrutureComponent;
use App\Http\Livewire\Dashboard\Formation\FormationComponent;
use App\Http\Livewire\Dashboard\Type\TypePatenariatComponent;
use App\Http\Livewire\Dashboard\Partenaire\PartenaireComponent;
use App\Http\Livewire\Site\Partenariat\AllPartenariatComponent;
use App\Http\Livewire\Site\Partenariat\MesPartenariatComponent;
use App\Http\Livewire\Site\Partenariat\CreationPartenariatComponent;
use App\Http\Livewire\Site\Partenariat\ModifierPartenariatComponent;

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
Route::get('/', WelcomeComponent::class)->name('welcome');

Route::get('/login', LoginComponent::class)->name('login');
Route::get('/register', RegisterComponent::class)->name('register');
// Route::get('/user/confirmed-password-status', ConfirmPasswordComponent::class)->name('password.confirmation');
// Route::get('/forgot-password', ForgotPasswordComponent::class)->name('password.request');
// Route::get('/reset-password/{token}', ResetPasswordComponent::class)->name('password.reset');
Route::get('/partner-edit/{id}', ModifierPartenariatComponent::class)->name('partner.edit');
Route::get('/detail-partner/{id}', DetailComponent::class)->name('partner.detail');



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
        Route::get('/liste-des-entites', FormationComponent::class)->name('entite');
        Route::get('/liste-des-object', ObjetComponent::class)->name('object');
        Route::get('/liste-des-structures', StrutureComponent::class)->name('struture');
        Route::get('/liste-des-partenaires', PartenaireComponent::class)->name('partenaire');
        Route::get('/liste-des-types', TypePatenariatComponent::class)->name('type');
        Route::get('/liste-de-tous-les-partenariat', AllPartenariatComponent::class)->name('allpartenariat');


        });

        Route::prefix('administration')->group(function () {
            Route::get('/liste-utilisateurs', UserComponent::class)->name('admin.user-index');
            Route::get('/liste-des-roles', RoleComponent::class)->name('role.user');

        });

        Route::get('/dashboard', DashboardComponent::class)->name('dashboard');
        Route::get('/creation-de-partenariat', CreationPartenariatComponent::class)->name('creation.de.artenariat');
        Route::get('/mditifcation-de-partenariat', ModifierPartenariatComponent::class)->name('modification.de.artenariat');
        Route::get('/liste-de-mes-partenariat', MesPartenariatComponent::class)->name('mes.partenariat');

});




