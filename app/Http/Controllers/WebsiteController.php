<?php

namespace App\Http\Controllers;

use App\Models\HardwareCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{

    public function index()
    {
        return view('ecommerce.website.home');
    }

    public function contact_us()
    {
        return view('ecommerce.website.contact_us');
    }

    public function categories()
    {
        $data = [
            'categories' => DB::table('hardware_categories')->get(),
        ];
        return view('ecommerce.website.categories');
    }
}
