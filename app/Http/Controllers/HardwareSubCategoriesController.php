<?php

namespace App\Http\Controllers;

use App\Models\HardwareSubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class HardwareSubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $category = new HardwareSubCategory();
        $category->main_category_id = $request->main_category;
        $category->name = $request->name;
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

    public function hardware_sub_category_list()
    {
        $category_list = DB::table('hardware_sub_categories')
                            ->select('name', 'description')
                            ->orderBy('id', 'asc')
                            ->get();
        return DataTables::of($category_list)
                            ->addColumn('action', function ($list) {
                                $button = '';
                                $button .= '<a href="" class="btn btn-sm p-0 " data-bs-toggle="tooltip" data-bs-placement="top" title="Edit" data-bs-original-title="Edit" aria-label="Edit"><span class="text-500 fas fa-edit"></span></a>';
                                $button .= '<a href="javascript:destroy()" class="btn btn-sm p-0 ms-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" data-bs-original-title="Delete" aria-label="Delete" aria-describedby="tooltip253699"><span class="text-500 fas fa-trash-alt"></span></a>';
                                return '<nobr>'. $button . '</nobr>';
                            })
                            ->make(true);
    }
}
