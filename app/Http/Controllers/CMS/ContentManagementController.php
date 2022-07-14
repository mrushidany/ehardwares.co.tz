<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\HardwareStock;
use App\Models\Image;
use DataTables;
use DB;
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
            $product = HardwareStock::where('id',$request->stock)->first();
            $product_id = $product->id;
            $product->status = 'new';
            $product->update();
            $image = new Image();
            if($request->file('image')){
                $image_path = $request->file('image');
                $image_name = $image_path->getClientOriginalName();
                $path = $request->file('image')->storeAs('uploads', $image_name, 'public');
            }
            $image->name = $product->name;
            $image->path = '/storage/'.$path;
            $image->stock_id = $product_id;
            $image->save();

            return response()->json(['success' => 'true']);
        }catch(QueryException $exception){
            dd($exception);
        }
    }

    public function new_product_list()
    {
        $new_product_list = DB::table('hardware_stocks')
                            ->leftJoin('images', 'images.stock_id', '=', 'hardware_stocks.id')
                            ->where('hardware_stocks.status', 'new')
                            ->select('hardware_stocks.code as stock', 'images.name as name', 'description', 'path as image');

                            return DataTables::of($new_product_list)
                                                ->addColumn('action', function($list){

                                                })
                                                ->addColumn('image', function($list){
                                                  $image = '<img src="' . $list->image . '" style="width: 40px">';
                                                  return $image;
                                                })
                                                ->rawColumns(['action', 'image'])
                                                ->make(true);
    }

}
