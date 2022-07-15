<?php

namespace App\Http\Controllers;

use App\Models\HardwareCategory;
use App\Models\HardwareStock;
use App\Models\Image;
use Illuminate\Support\Facades\DB;

class WebsiteController extends Controller
{
    public function index()
    {
        $stock = HardwareStock::where('status', 'new')->get();
        $images = Image::where(['stock_id', $stock->id])->get();
        $data = [
            'product' => $stock,
            'images' => $images
        ];
        return view('ecommerce.website.home')->with($data);
    }

    public function contact_us()
    {
        return view('ecommerce.website.contact_us');
    }

    public function categories()
    {
        $data = [
            'categories' => DB::table('hardware_categories')->get(),
            'hardwares' => HardwareStock::get(),
            'stocks' => HardwareCategory::all(),
        ];
        return view('ecommerce.website.categories')->with($data);
    }

    public function check_hardware_stock($category)
    {
        return HardwareStock::where('category', $category)->count();
    }
}
