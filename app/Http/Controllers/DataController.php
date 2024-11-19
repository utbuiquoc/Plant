<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Process;

class DataController extends Controller
{
    public function test() {
        $result = Process::run('cd /var/www/html/Plant && php artisan db:seed --class=FakeDataSeeder');

        return $result->output();
    }
}
