<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mcp;
use App\Cpinfo;
use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;
use App\Countries;
use Illuminate\Support\Facades\DB;
class CpinfoController extends Controller
{
  public function index()
    {
        // $cp = Cpinfo::all();
        $cp = DB::table('cp_info')->get();
        return view('admin.pages.cps.index',compact('cp'));
    }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Countries::all();
        $mcp = Mcp::all();
        return view('admin.pages.cps.create',compact('countries','mcp'));
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
        // try {

            $cps = new Cpinfo();
            $cps->name = $request->name;
           	$cps->user_name = $request->user_name;
            $cps->password = $request->password;
            $cps->cp_connect = $request->cp_connect;
            $cps->countries_id = $request->countries_id;
            $cps->mcp_id = $request->mcp_id;
            $cps->status = $request->status;
            

            $result = $cps->save();

        // } catch (Exception $e) {

        //     return $e->getMessage();
        // }

        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.cps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cps = Cpinfo::findOrFail($id);
        
        return view('admin.pages.cps.show',compact('cps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cps = Cpinfo::findOrFail($id);
        $countries = Countries::all();
        $mcp = Mcp::all();
        return view('admin.pages.cps.edit',compact('cps'));
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
        $cps = Cpinfo::find($id);
        $cps->name = $request->name;
        $cps->user_name = $request->user_name;
        $cps->password = $request->password;
        $cps->cp_connect = $request->cp_connect;
        $cps->countries_id = $request->countries_id;
        $cps->mcp_id = $request->mcp_id;
        $cps->status = $request->status;
        
        
        $result = $cps->save();
        return redirect()->route('admin.cps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $cps = cpinfocp::find($id);
        $cps->delete();
        return redirect()->route('admin.cps.index');

    }




}
