<?php

namespace App\Http\Controllers\Stocks;

use App\Http\Controllers\Controller;
use App\Models\HardwareCategory;
use App\Models\HardwareStock;
use App\Models\HardwareStockDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Database\QueryException;

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
            $stock_detail->save();
        }

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
    public function destroy(Request $request,$id)
    {
        try {
            DB::beginTransaction();
            HardwareStock::where('id', $id)->delete();
            DB::commit();
            $data = ['type' => 'success', 'title' => 'Success', 'message' => 'Deleted stock'];
            return $request->ajax() ? response()->json($data) : redirect()->back()->with($data);
        }catch(QuerException $exception) {
            DB::rollback();
            $data =['type' => 'error', 'title' => 'Fail', 'message' => 'Record could not be Deleted'];
            return $request->ajax() ? response()->json($data) : redirect()->back()->with($data);
        }
    }

    public function stock_list()
    {
        $stock_list = DB::table('hardware_stocks')
                        ->leftJoin('hardware_categories','hardware_categories.id','=','hardware_stocks.category')
                        ->leftJoin('hardware_stock_details', 'hardware_stock_details.hardware_stock_id','=','hardware_stocks.id')
                        ->select('hardware_stocks.id','hardware_stocks.code','hardware_stocks.name','hardware_stock_details.units','hardware_stock_details.quantity','hardware_stock_details.raw_price');

       return DataTables::of($stock_list)
                            ->addColumn('action', function($list){
                                $modal = 'hardware_category_modal';
                                $button = '';
                                $button .= '<a href="javascript:edit(\''. route('hardware_stock.edit', $list->id) .'\', \''. $modal .'\')" class="btn btn-sm p-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><span class="text-500 fas fa-edit"></span></a>';
                                $button .= '<a href="javascript:destroy(\''. route('hardware_stock.destroy',$list->id) .'\')" class="btn btn-sm p-0 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete" aria-describedby="tooltip253699"><span class="text-500 fas fa-trash-alt"></span></a>';
                                return '<nobr>'. $button . '</nobr>';
                            })
                            ->addColumn('name' , function($list) {
                                $link = '<a class="text-success" href="' . route('hardware_stock_profile', $list->id) .'" >'. $list->name .'</a>';
                                return $link;
                            })
                            ->rawColumns(['name', 'action'])
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

}
