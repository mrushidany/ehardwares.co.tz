<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\HardwareStock;
use Illuminate\Http\Request;

class ContentManagementController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('ecommerce.admin.cms.dashboard');
    }

    public function products()
    {
        $data = [
            'stocks' => HardwareStock::all()
        ];
        return view('ecommerce.admin.cms.products.index')->with($data);
    }
}
