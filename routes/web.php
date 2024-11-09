<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Sidebar;
use App\Livewire\Maps;

Route::get('/', DashBoard::class)->name('dashboard');
Route::get('/maps', Maps::class)->name('maps');

Route::get('/test', Sidebar::class);