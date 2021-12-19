<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CpLineRoute;
use App\CellularCompanies;
use App\CallingPlan;
use App\Line;
use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;

class CplineController extends Controller
{
   public function index()
    {
        $cplines = CpLineRoute::all();
        return view('admin.pages.cplines.index',compact('cplines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $callingplan = CallingPlan::all();
        $cellularcompanies = CellularCompanies::all();
        $lines = Line::all();
        return view('admin.pages.cplines.create',compact('callingplan','cellularcompanies','lines'));
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

            $cplines = new CpLineRoute();
            $cplines->name = $request->name;
           
            $cplines->calling_plane_costing_id = $request->calling_plane_costing_id;
            $cplines->cellular_companies_id = $request->cellular_companies_id;
            $cplines->line_id = $request->line_id;
            $cplines->status = $request->status;
            $result = $cplines->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

       dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.cplines.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cplines = CpLineRoute::findOrFail($id);
        
        return view('admin.pages.cplines.show',compact('cplines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cplines = CpLineRoute::findOrFail($id);
         $callingplan = CallingPlan::all();
        return view('admin.pages.cplines.edit',compact('cplines'));
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
        $cplines = CpLineRoute::find($id);
        $cplines->name = $request->name;
       
        $cplines->calling_plane_costing_id = $request->calling_plane_costing_id;
        $cplines->cellular_companies_id = $request->cellular_companies_id;
        $cplines->line_id = $request->line_id;
        
        $cplines->status = $request->status;
        
        
        $result = $cplines->save();
        return redirect()->route('admin.cplines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $cplines = CpLineRoute::find($id);
        $cplines->delete();
        return redirect()->route('admin.cplines.index');

    }
}
