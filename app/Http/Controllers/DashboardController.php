<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }

     public function index()
     {
         if(Auth::user()->hasRole('super_administrator'))
         {
            return view('ecommerce.admin.super.index');
         }
         else if(Auth::user()->hasRole('administrator'))
         {
            return view('ecommerce.admin.junior.index');
         }
         else if(Auth::user()->hasRole('owner'))
         {
            return view('ecommerce.admin.owner.index');
         }


     }
}
