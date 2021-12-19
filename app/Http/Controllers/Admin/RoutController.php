<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rout;
use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\DB;
use App\CellularCompanies;
use Illuminate\Support\Facades\Session;
class RoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $rout = DB::table('create_route')->get();
        // $rout = Rout::all();
        return view('admin.pages.rout.index',compact('rout'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rout = Rout::all();
         $cellularcompanies = CellularCompanies::all();
         return view('admin.pages.rout.create',compact('rout','cellularcompanies'));
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

            $rout = new Rout();
            $rout->route_name = $request->route_name;
            $rout->cellular_companies_id = $request->cellular_companies_id;
           $rout->status = $request->status;
            $result = $rout->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.rout.index');
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
        $rout = Rout::findOrFail($id);
        
        return view('admin.pages.rout.show',compact('rout'));
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
        $rout = Rout::findOrFail($id);
        $cellularcompanies = CellularCompanies::all();
        return view('admin.pages.rout.edit',compact('rout'));
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
        $rout = Rout::find($id);
        $rout->route_name = $request->route_name;
        $rout->cellular_companies_id = $request->cellular_companies_id;
        $rout->status = $request->status;
        $result = $rout->save();
        return redirect()->route('admin.rout.index');
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
        $rout = Rout::find($id);
        $rout->delete();
        return redirect()->route('admin.rout.index');
        //
    }
}
