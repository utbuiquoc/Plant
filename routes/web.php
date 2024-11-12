<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Sidebar;
use App\Livewire\Maps;
use App\Livewire\Analytics;
use App\Livewire\Analytics\Device;
use App\Livewire\Analytics\Devicetest;
use App\Livewire\Warning;

Route::get('/', DashBoard::class)->name('dashboard');
Route::get('/maps', Maps::class)->name('maps');
Route::get('/analytics', Analytics::class)->name('analytics');

Route::get('/device/1', Device::class)->name('device-1');
Route::get('/device/2', Devicetest::class)->name('device-2');

Route::get('/warning', Warning::class)->name('warning');

Route::get('/test', Sidebar::class);