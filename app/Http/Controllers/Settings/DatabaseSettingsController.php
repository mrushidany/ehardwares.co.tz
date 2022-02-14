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

    public function db_migrate(Request $request)
    {
        try {
            Artisan::call('migrate');
            $data = ['state' => 'Done', 'title' => 'Successful', 'message' => 'Migrated Sucessfull'];
            return $request->ajax() ? response()->json($data) : redirect()->route('app_settings');
        } catch (\Throwable $th) {
            $data = ['state' => 'Error', 'title' => 'Failed', 'message' => $th];
            return $request->ajax() ? response()->json($data) : redirect()->route('app_settings');
        }

    }
}
