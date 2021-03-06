<?php

namespace App\Http\Controllers;

use App\Models\HardwareCategory;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class HardwareCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'main_categories' => HardwareCategory::get(),        ];
        return view('ecommerce.hardware.categories.index')->with($data);
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
        $category = new HardwareCategory();
        $category->category_name = $request->name;
        $category->description = $request->description;
        $category->save();

        if($category){
            $data = ['type' => 'success', 'title' => 'Success', 'message' => 'Saved new category'];
            return $request->ajax() ? response()->json($data) : redirect()->back();
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
        $category = HardwareCategory::find($id);
        $data = [
            'category' => $category,
        ];
        //return view('ecommerce.hardware.categories.forms.hardware_category_form')->with($data);
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
            HardwareCategory::where('id',$id)->delete();
            DB::commit();
            $data = ['type' => 'success', 'title' => 'Success', 'message' => 'Deleted category'];
            return $request->ajax() ? response()->json($data) : redirect()->back()->with($data);

        }catch(QueryException $queryException){
            DB::rollBack();
            $data =['type' => 'error', 'title' => 'Fail', 'message' => 'Record could not be Deleted'];
            return $request->ajax() ? response()->json($data) : redirect()->back()->with($data);
        }
        $data =['type' => 'error', 'title' => 'Fail', 'message' => 'Record could not be Deleted'];
        return $request->ajax() ? response()->json($data) : redirect()->back()->with($data);
    }

    public function hardware_category_list()
    {
        $category_list = DB::table('hardware_categories')
                            ->select('id','category_name', 'description')
                            ->orderBy('id', 'asc')
                            ->get();
        return DataTables::of($category_list)
                            ->addColumn('action', function ($list) {
                                $modal = 'hardware_category_modal';
                                $button = '';
                                $button .= '<a href="javascript:edit(\''. route('hardware_categories.edit', $list->id) .'\', \''. $modal .'\')" class="btn btn-sm p-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><span class="text-500 fas fa-edit"></span></a>';
                                $button .= '<a href="javascript:destroy(\''. route('hardware_categories.destroy',$list->id) .'\')" class="btn btn-sm p-0 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete" aria-describedby="tooltip253699"><span class="text-500 fas fa-trash-alt"></span></a>';
                                return '<nobr>'. $button . '</nobr>';
                            })
                            ->make(true);
    }
}
