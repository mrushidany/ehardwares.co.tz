<?php

namespace App\Http\Controllers\Stocks;

use App\Http\Controllers\Controller;
use App\Models\HardwareCategory;
use App\Models\HardwareStock;
use App\Models\HardwareStockDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class HardwareStockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'main_categories' => HardwareCategory::get(),];
        return view('ecommerce.hardware.stock.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->file('image')->getClientOriginalName());
        //$this->validate_image($request->image);
        $stock = new HardwareStock();
        $stock->category = $request->main_category;
        $stock->description = $request->description;
        $stock->code = $request->code;
        $stock->name = $request->name;
        $stock->save();
        if($stock->id) {
            $stock_detail = new HardwareStockDetail();
            $stock_detail->units = $request->units;
            $stock_detail->quantity = $request->quantity;
            $stock_detail->raw_price = $request->raw_price;
            $stock_detail->selling_price = $this->price_calculator($request->raw_price);
            $stock_detail->hardware_stock_id = $stock->id;
            $stock_detail->image_url = $request->file('image')->getClientOriginalName();
            $stock_detail->save();
            }
        $request->file('image')->store('public/stock');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function stock_list()
    {
        $stock_list = DB::table('hardware_stocks')
                        ->leftJoin('hardware_categories','hardware_categories.id','=','hardware_stocks.category')
                        ->leftJoin('hardware_stock_details', 'hardware_stock_details.hardware_stock_id','=','hardware_stocks.id')
                        ->select('hardware_stocks.id','hardware_stocks.code','hardware_stocks.name','hardware_stock_details.units','hardware_stock_details.quantity','hardware_stock_details.raw_price');

       return DataTables::of($stock_list)
                            ->addColumn('action', function($list){

                            })
                            ->make(true);
    }

    public function price_calculator($raw_price)
    {
        $admin = 0.10;
        $vat = 0.18;
        $admin_costs = $raw_price * $admin;
        $vat_costs = $admin_costs * $vat;
        return $raw_price + $admin_costs + $vat_costs;
    }

    public function validate_image($request)
    {
        return $request->validate([
            'image' => 'required|jpeg,png,jpg,gif,bmp,tiff,psd,cr2|max:2048'
        ]);
    }
}
