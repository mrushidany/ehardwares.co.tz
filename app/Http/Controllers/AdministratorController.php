<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

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

    public function save_new_user(Request $request)
    {

        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'phone_number' => 'required|max:255|unique:users',
            'email' => 'required|email|unique:users',
            'password' => ['required', Rules\Password::defaults()],
        ]);
        $data =
        [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ];
        $user = User::create($data);

        $user->attachRole($request->role);
        event(new Registered($user));

        $data = ['state' => 'Done', 'title' => 'Successful', 'message' => 'Record created successful'];
        return \Request::ajax() ? response()->json($data) : redirect()->route('all_users');
    }
}
