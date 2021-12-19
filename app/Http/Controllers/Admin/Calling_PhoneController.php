<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CallingPhone;
use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\DB;
use App\CellularCompanies;
use Illuminate\Support\Facades\Session;
class Calling_PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $callingphone = DB::table('calling_phone')->get();
       
        return view('admin.pages.callingphone.index',compact('callingphone'));
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
         // dd($cellularcompanies);
         $callingphone = CallingPhone::all();
        return view('admin.pages.callingphone.create',compact('callingphone','cellularcompanies'));
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
        // dd($request->all());
        request()->validate([
            'pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        try {

            $callingphone = new callingphone();
            $callingphone->calling_plan_name = $request->calling_plan_name;
            $callingphone->cellular_companies_id = $request->cellular_companies_id;
            $callingphone->call_plan_detail = $request->call_plan_detail;
           $callingphone->status = $request->status;
            $result = $callingphone->save();

        } catch (Exception $e) {

            return $e->getMessage();
            }
             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.callingphone.index');
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
        $callingphone = callingphone::findOrFail($id);
        $cellularcompanies = CellularCompanies::all();
        return view('admin.pages.callingphone.show',compact('callingphone','cellularcompanies'));
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
        $callingphone = callingphone::findOrFail($id);
        return view('admin.pages.callingphone.edit',compact('callingphone'));
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
            $callingphone = new callingphone();
            $callingphone->calling_plan_name = $request->calling_plan_name;
            $callingphone->cellular_companies_id = $request->cellcellular_companies_idular_company;
            $callingphone->call_plan_detail = $request->call_plan_detail;
            $callingphone->status = $request->status;
            $result = $callingphone->save();
        return redirect()->route('admin.callingphone.index');
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
        $callingphone = callingphone::find($id);
        $callingphone->delete();
        return redirect()->route('admin.callingphone.index');
        //
    }
}
