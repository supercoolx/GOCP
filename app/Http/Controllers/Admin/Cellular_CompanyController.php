<?php

namespace App\Http\Controllers\Admin;
use App\Https\Traits\FileUploadTrait;
use App\CellularCompanies;
use App\Countries;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cellular_CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $cellularcompanies = DB::table('cellular_companies')->get();
        $cellularcompanies = CellularCompanies::all();
        return view('admin.pages.cellularcompanies.index',compact('cellularcompanies'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cellularcompanies = CellularCompanies::all();
        $countries = Countries::all();
        return view('admin.pages.cellularcompanies.create',compact('cellularcompanies','countries'));
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
         request()->validate([
            'pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        try {

            $cellularcompanies = new CellularCompanies();
            $cellularcompanies->cellular_company_name = $request->cellular_company_name;
            $cellularcompanies->countries_id = $request->countries_id;
            $cellularcompanies->status = $request->status;
            $result = $cellularcompanies->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.cellularcompanies.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cellularcompanies = CellularCompanies::findOrFail($id);
        
        return view('admin.pages.cellularcompanies.show',compact('cellularcompanies'));
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
        $cellularcompanies = CellularCompanies::findOrFail($id);
        $countries = Countries::all();
        return view('admin.pages.cellularcompanies.edit',compact('cellularcompanies','countries'));
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
            $cellularcompanies = CellularCompanies::findOrFail($id);
            $cellularcompanies->cellular_company_name = $request->cellular_company_name;
            $cellularcompanies->countries_id = $request->countries_id;
            $cellularcompanies->status = $request->status;
            $result = $cellularcompanies->save();
        return redirect()->route('admin.cellularcompanies.index');
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
        $cellularcompanies = CellularCompanies::find($id);
        $cellularcompanies->delete();
        return redirect()->route('admin.cellularcompanies.index');
        //
    }
}
