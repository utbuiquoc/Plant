<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Sidebar;

Route::get('/', DashBoard::class);

Route::get('/test', Sidebar::class);