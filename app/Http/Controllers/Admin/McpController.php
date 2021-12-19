<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mcp;

use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;


class McpController extends Controller
{
    public function index()
    {
        $mcps = Mcp::all();
       
        return view('admin.pages.mcps.index',compact('mcps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $mcp = Mcp::all();
        return view('admin.pages.mcps.create',compact('mcp'));
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

            $mcps = new Mcp();
            $mcps->name = $request->name;
           	$mcps->user_name = $request->user_name;
          
            $mcps->mcp_connect = $request->mcp_connect;
            
            $mcps->status = $request->status;
            

            $result = $mcps->save();

        // } catch (Exception $e) {

        //     return $e->getMessage();
        // }

        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.mcps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mcps = Cpinfo::findOrFail($id);
        
        return view('admin.pages.mcps.show',compact('mcps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $mcps = Mcp::all();
        return view('admin.pages.mcps.edit',compact('mcps'));
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
        $mcps = Cpinfo::find($id);
        $mcps->name = $request->name;
        $mcps->user_name = $request->user_name;
       
        $mcps->mcp_connect = $request->mcp_connect;
       
        $mcps->status = $request->status;
        
        
        $result = $mcps->save();
        return redirect()->route('admin.mcps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $mcps = Mcp::find($id);
        $mcps->delete();
        return redirect()->route('admin.mcps.index');

    }
}
