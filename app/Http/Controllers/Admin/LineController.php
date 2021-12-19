<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Line;
use App\Cpinfo;
use App\Lineinfo;
use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;

class LineController extends Controller
{
  public function index()
    {
        $lines = Line::all();
        return view('admin.pages.lines.index',compact('lines'));
    }

    
    public function create()
    {
    	$lineinfos= Lineinfo::all();
    	$cp = Cpinfo::all();
        return view('admin.pages.lines.create',compact('lineinfos','cp'));
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

            $lines = new Line();
            $lines->line_number = $request->line_number;
           	$lines->imei = $request->imei;
            $lines->cp_info_id = $request->cp_info_id;
            $lines->line_info_id = $request->line_info_id;
            $lines->status = $request->status;
            

            $result = $lines->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.lines.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lines = Line::findOrFail($id);
        
        return view('admin.pages.lines.show',compact('lines'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lines = Line::findOrFail($id);
        $lineinfos= Lineinfo::all();
    	$cp = Cpinfp::all();
        return view('admin.pages.lines.edit',compact('lines'));
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
        $lines = Line::find($id);
        $lines->line_number = $request->line_number;
        $lines->imei = $request->imei;
        $lines->cp_info_id = $request->cp_info_id;
        $lines->line_info_id = $request->line_info_id;
        $lines->status = $request->status;
        
        
        $result = $lines->save();
        return redirect()->route('admin.lines.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $lines = Line::find($id);
        $lines->delete();
        return redirect()->route('admin.lines.index');

    }
}
