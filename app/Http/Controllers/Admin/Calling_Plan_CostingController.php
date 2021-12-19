<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\CallingPlan;
use App\CallingPhone;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class Calling_Plan_CostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $callingplan = CallingPlan::all();
        return view('admin.pages.callingplan.index',compact('callingplan'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $callingplan = CallingPlan::all();
        $callingphone = CallingPhone::all();
         return view('admin.pages.callingplan.create',compact('callingplan','callingphone'));
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

            $callingplan = new callingplan();
            $callingplan->calling_phone_id = $request->calling_phone_id;
            $callingplan->calling_plan_cost = $request->calling_plan_cost;
            $callingplan->usa_currency = $request->usa_currency;
           $callingplan->status = $request->status;
            $result = $callingplan->save();

        } catch (Exception $e) {

            return $e->getMessage();
            }

             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.callingplan.index');
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
         $callingplan = CallingPlan::findOrFail($id);
        $callingphone = CallingPhone::all();
        return view('admin.pages.callingplan.show',compact('callingplan','callingphone'));
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
         $callingplan = CallingPlan::findOrFail($id);
         $callingphone = CallingPhone::all();
        return view('admin.pages.callingplan.edit',compact('callingplan', 'callingphone'));
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
       $callingplan = CallingPlan::find($id);
       $callingplan->calling_phone_id = $request->calling_phone_id;
       $callingplan->calling_plan_cost = $request->calling_plan_cost;
       $callingplan->usa_currency = $request->usa_currency;
       $callingplan->status = $request->status;
        
        $result = $callingplan->save();
        return redirect()->route('admin.callingplan.index');
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

        $callingplan = CallingPlan::find($id);
        $callingplan->delete();
        return redirect()->route('admin.callingplan.index');

        //
    }
}
