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

Route::get('/', DashBoard::class)->name('dashboard');
Route::get('/maps', Maps::class)->name('maps');
Route::get('/analytics', Analytics::class)->name('analytics');

Route::get('/device/{id}', Device::class)->name('device');

Route::get('/warning', Warning::class)->name('warning');

Route::get('/fake-data', FakeData::class);
Route::get("/gen-data", [App\Http\Controllers\DataController::class, 'test']);

// use App\Models\AirQuality;
// Route::get('/test', function() {
//     return gettype((int)AirQuality::where('device_id', 1)->orderBy('id', 'DESC')->first()->value);
// });