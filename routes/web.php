<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Sidebar;
use App\Livewire\Maps;
use App\Livewire\Analytics;
use App\Livewire\Analytics\Device;
use App\Livewire\Analytics\Devicetest;
use App\Livewire\Warning;
use App\Livewire\Test;

Route::get('/', DashBoard::class)->name('dashboard');
Route::get('/maps', Maps::class)->name('maps');
Route::get('/analytics', Analytics::class)->name('analytics');

Route::get('/device/{id}', Device::class)->name('device');

Route::get('/warning', Warning::class)->name('warning');


use App\Livewire\Charts\Nitrogen;
Route::get('/test', Nitrogen::class);