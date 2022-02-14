<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DatabaseSettingsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function db_migrate()
    {
        Artisan::call('migrate', array('--path' => 'app/migrations', '--force' => true));
    }
}
