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
            $data = ['state' => 'success', 'title' => 'Success', 'message' => 'Migrated Sucessfull'];
            return $request->ajax() ? response()->json($data) : redirect()->route('app_settings');
        } catch (\Throwable $th) {
            $data = ['state' => 'error', 'title' => 'Failed', 'message' => $th];
            return $request->ajax() ? response()->json($data) : redirect()->route('app_settings');
        }

    }

    public function db_migrate_rollback(Request $request)
    {
        try {
            Artisan::call('migrate:rollback');
            $data = ['state' => 'success', 'title' => 'Success', 'message' => 'Rolled back sucessfull'];
            return $request->ajax() ? response()->json($data) : redirect()->route('app_settings');
        } catch (\Throwable $th) {
            $data = ['state' => 'error', 'title' => 'Failed', 'message' => $th];
            return $request->ajax() ? response()->json($data) : redirect()->route('app_settings');
        }
    }

    public function clear_cache(Request $request)
    {
        try {
            Artisan::call('cache:clear');
            $data = ['state' => 'success', 'title' => 'Success', 'message' => 'Cache succesfull cleared'];
            return $request->ajax() ? response()->json($data) : redirect()->route('app_settings');
        } catch (\Throwable $th) {
            $data = ['state' => 'error', 'title' => 'Failed', 'message' => $th];
            return $request->ajax() ? response()->json($data) : redirect()->route('app_settings');
        }
    }
}
