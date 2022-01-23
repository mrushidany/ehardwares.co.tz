<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdministratorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if(Auth::user()->hasRole('super_administrator'))
        {
            return redirect()->route('dashboard');
        }
    }

    public function settings()
    {
        if(Auth::user()->hasRole('super_administrator'))
        {
            $data =
            [
                'users' => User::all()->count()
            ];
            return view('ecommerce.admin.super.settings.index')->with($data);
        }
    }

    public function all_users()
    {
        return view('ecommerce.admin.super.settings.users.all_users');
    }

    public function add_new_user()
    {
        return view('ecommerce.admin.super.settings.users.add_user.add_new_user');
    }
}
