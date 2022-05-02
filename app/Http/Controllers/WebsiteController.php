<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{

    public function index()
    {
        return view('ecommerce.website.index');
    }

    public function contact_us()
    {
        return view('ecommerce.website.contact_us');
    }
}
