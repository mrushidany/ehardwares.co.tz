<?php

namespace App\Http\Controllers\Stocks;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HardwareStockProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile ($id)
    {
        return view('ecommerce.hardware.stock.profile.index');
    }

    public function image_gallery($id){
        dd($id);
    }
}
