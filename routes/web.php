<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Sidebar;
use App\Livewire\Maps;
use App\Livewire\Analytics;
use App\Livewire\Analytics\Device;
use App\Livewire\Analytics\Devicetest;
use App\Livewire\Warning;
use App\Livewire\FakeData;
use App\Livewire\Test;
use App\Http\Controllers\DataController;

Route::get('/', DashBoard::class)->name('dashboard');
Route::get('/maps', Maps::class)->name('maps');
Route::get('/analytics', Analytics::class)->name('analytics');

Route::get('/device/{id}', Device::class)->name('device');

Route::get('/warning', Warning::class)->name('warning');

Route::get('/fake-data', FakeData::class);
Route::get("/gen-data", [DataController::class, 'test']);

Route::get('/insert/{humidity}/{temperature}/{soilmoisture}/{soiltemp}/{conductivity}/{pH}/{nitrogen}/{phosphorus}/{potassium}', [DataController::class, 'insert']);

use App\Livewire\Charts\Conductivity;
Route::get('/test', Conductivity::class);