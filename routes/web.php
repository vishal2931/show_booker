<?php

use App\Livewire\MovieComponent;
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

/* Livewire Component */
Route::get('/', MovieComponent::class)->name('livewire.movie');
Route::get('/{movie}/screen', ScreenComponent::class)->name('livewire.screen');
Route::get('{movie}/{screen}/book-seats', SlotComponent::class)->name('livewire.slot');
