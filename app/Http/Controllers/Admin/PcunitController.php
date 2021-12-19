<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Pcunit;
use App\Cpinfo;

use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;

class PcunitController extends Controller
{
    public function index()
    {
        $cpunits = Pcunit::all();
        return view('admin.pages.cpunits.index',compact('cpunits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cpunits = Pcunit::all();
        $cps = Cpinfo::all();
       
        return view('admin.pages.cpunits.create',compact('cpunits','cps'));
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

            $cpunits = new Pcunit();
            $cpunits->time = $request->time;
           
            $cpunits->cp_info_id = $request->cp_info_id;
          
            $cpunits->status = $request->status;
            $result = $cpunits->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

       dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.cpunits.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cpunits = Pcunit::findOrFail($id);
        
        return view('admin.pages.cpunits.show',compact('cpunits'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cpunits = Pcunit::findOrFail($id);
         $cp = Cpinfo::all();
        return view('admin.pages.cpunits.edit',compact('cpunits'));
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
        $cpunits = Pcunit::find($id);
        $cpunits->time = $request->time;
       	$cpunits->cp_info_id = $request->cp_info_id;
        $cpunits->status = $request->status;
        $result = $cpunits->save();
        return redirect()->route('admin.cpunits.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $cpunits = Pcunit::find($id);
        $cpunits->delete();
        return redirect()->route('admin.cpunits.index');

    }
}
