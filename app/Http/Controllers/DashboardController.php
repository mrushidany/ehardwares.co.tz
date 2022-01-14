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
            echo "Hey there were are in the dashboard ready to mingle super administratorsss";
         }


     }
}
