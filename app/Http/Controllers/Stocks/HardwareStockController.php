<?php

namespace App\Http\Controllers\Stocks;

use App\Http\Controllers\Controller;
use App\Models\HardwareCategory;
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
        dd($request->all());
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
                        ->leftJoin('hardware_categories','hardware_categories.id','=','hardware_stocks.category_id')
                        ->leftJoin('hardware_stock_details', 'hardware_stock_details.hardware_stock_id','=','hardware_stocks.id')
                        ->select('hardware_stocks.id','hardware_stock_details.image_url as image','hardware_stocks.name','hardware_stock_details.units','hardware_stock_details.quantity','hardware_stock_details.raw_price');

       return DataTables::of($stock_list)
                            ->addColumn('action', function($list){

                            })
                            ->make(true);
    }
}
