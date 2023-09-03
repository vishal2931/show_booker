<?php

use App\Livewire\ScreenComponent;
use App\Livewire\SlotComponent;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Livewire Component */
Route::get('/', ScreenComponent::class)->name('livewire.screen');
Route::get('/book-seats/{screen}', SlotComponent::class)->name('livewire.slot');
