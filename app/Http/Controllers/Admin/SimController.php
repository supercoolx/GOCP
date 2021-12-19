<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Sim;
use App\CellularCompanies;
use App\CallingPlan;

use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;

class SimController extends Controller
{
    public function index()
    {
        $sims = Sim::all();
        return view('admin.pages.sims.index',compact('sims'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $sims = Sim::all();
        $callingplan = CallingPlan::all();
        $cellularcompanies = CellularCompanies::all();

        return view('admin.pages.sims.create',compact('sims','callingplan','cellularcompanies'));
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

            $sims = new Sim();
            $sims->name = $request->name;
           	$sims->phone_number = $request->phone_number;
           	$sims->imei = $request->imei;
            $sims->calling_plane_costing_id = $request->calling_plane_costing_id;
            $sims->cellular_companies_id = $request->cellular_companies_id;
            $sims->status = $request->status;
            $result = $sims->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

      
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.sims.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sims = Sim::findOrFail($id);
        
        return view('admin.pages.sims.show',compact('sims'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sims = Sim::findOrFail($id);
         $callingplan = CallingPlan::all();
         $cellularcompanies = CellularCompanies::all();
        return view('admin.pages.sims.edit',compact('sims','callingplan','cellularcompanies'));
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
        $sims = Sim::find($id);
        $sims->name = $request->name;
        $sims->phone_number = $request->phone_number;
        $sims->imei = $request->imei;
        $sims->calling_plane_costing_id = $request->calling_plane_costing_id;
        $sims->cellular_companies_id = $request->cellular_companies_id;
        $sims->status = $request->status;
            
        
        
        $result = $sims->save();
        return redirect()->route('admin.sims.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $sims = Sim::find($id);
        $sims->delete();
        return redirect()->route('admin.sims.index');

    }
}
