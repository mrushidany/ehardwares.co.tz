<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
     public function __construct()
     {
         $this->middleware('auth');
     }

     public function index()
     {
         echo "Hey there were are in the dashboard ready to mingle";

     }
}
