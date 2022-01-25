<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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
        if(Auth::user()->hasRole('super_administrator') || Auth::user()->hasRole('administrator') || Auth::user()->hasRole('owner'))
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

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->phone_number = $request->phone_number;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $user->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $user->save();

        $user->attachRole($request->role);

        $data = ['state' => 'Done', 'title' => 'Successful', 'message' => 'Record created successful'];
        return \Request::ajax() ? response()->json($data) : redirect()->route('all_users');
    }

    public function profile()
    {
        $id = Auth::user()->id;
        $role_user = DB::table('role_user')->where('user_id',$id)->first();
        $role = DB::table('roles')->where('id',$role_user->role_id)->first();
        $data =
        [
            'role_name' => $role->display_name,
        ];
        return view('ecommerce.admin.profile')->with($data);
    }
}
