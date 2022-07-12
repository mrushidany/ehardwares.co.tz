<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\HardwareStock;
use Doctrine\DBAL\Query\QueryException;
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

    public function cms_add_new_product(Request $request)
    {
        try {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:width=540,height=458',
            ]);
            $product = HardwareStock::find($request->name);
            dd($product);
        }catch(QueryException $exception){
            dd($exception);
        }





    }
}
