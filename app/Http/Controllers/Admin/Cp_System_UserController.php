<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Cp_System_UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $cpsystem = CpSystem::all();
        return view('admin.pages.cpsystem.index',compact('cpsystem'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.cpsystem.create');
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

            $cpsystem = new cpsystem();
            $cpsystem->name = $request->name;
            $cpsystem->Type = $request->Type;
            $cpsystem->email = $request->email;
            $cpsystem->access = $request->access;
            $cpsystem->password = $request->password;
           $cpsystem->status = $request->status;
            $result = $cpsystem->save();

        } catch (Exception $e) {

            return $e->getMessage()

             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.cpsystem.index');
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
        $cpsystem = CallingPlan::findOrFail($id);
        
        return view('admin.pages.cpsystem.show',compact('cpsystem'));
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
         $cpsystem = CallingPlan::findOrFail($id);
        return view('admin.pages.cpsystem.edit',compact('cpsystem'));
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
       $cpsystem = Cp_System_UserController::find($id);
       $cpsystem->name = $request->name;
       $cpsystem->Type = $request->Type;
       $cpsystem->email = $request->email;
       $cpsystem->access = $request->access;
       $cpsystem->password = $request->password;
       $cpsystem->status = $request->status;
        
        $result = $cpsystem->save();
        return redirect()->route('admin.cpsystem.index');
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
         $cpsystem = Cp_System_UserController::find($id);
        $cpsystem->delete();
        return redirect()->route('admin.cpsystem.index');
        //
    }
}
