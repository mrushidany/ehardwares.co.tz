<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }

     public function index()
     {
        $data = [
            'greeting' => $this->greeting(),
        ];

         if(Auth::user()->hasRole('super_administrator'))
         {
            return view('ecommerce.admin.super.index')->with($data);
         }
         else if(Auth::user()->hasRole('administrator'))
         {
            return view('ecommerce.admin.junior.index')->with($data);
         }
         else if(Auth::user()->hasRole('owner'))
         {
            return view('ecommerce.admin.owner.index')->with($data);
         }
     }

     public function greeting()
     {
        $hour = Carbon::now()->format('H');
        if($hour < 12) {
            return 'Good Morning';
        } elseif ($hour < 17) {
            return 'Good Afternoon';
        }else {
            return 'Good Evening';
        }
     }
}
