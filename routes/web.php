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

use App\Events\AirTemp;
Route::get('/test', function() {
    $airtemp = [
        'device_id' => 1,
        'value' => rand(20, 25),
        'created_at' => now(),
    ];
    // DB::table('airtemps')->insert($airtemp);
    broadcast(new AirTemp($airtemp))->toOthers();
});