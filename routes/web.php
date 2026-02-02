<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use App\Livewire\Settings\TwoFactor;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProvedorController;

Route::get('/InicioSesion',function(){
return view('InicioSesion');
})->name('IniciarSesion');

Route::get('/Registro',function(){
return view('Registro');
})->name('Registrarse');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/LandingUP',function (){
    return view('LandingUP');
})->name('landingUP');

// Rutas protegidas que requieren autenticación
Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    
    Route::resource('products', ProductController::class);
    Route::resource('categorias', CategoriaController::class);
    Route::resource('provedor', ProvedorController::class);
});

require __DIR__.'/auth.php';
