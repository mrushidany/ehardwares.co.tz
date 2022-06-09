<?php

namespace App\Http\Controllers;
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
            'hardwares' => DB::table('hardware_stocks')->get(),
        ];
        return view('ecommerce.website.categories')->with($data);
    }
}
