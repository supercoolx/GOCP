<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lineinfo;
use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;

class LineinfoController extends Controller
{
   public function index()
    {
        $lineinfos = Lineinfo::all();
        return view('admin.pages.lineinfos.index',compact('lineinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.lineinfos.create');
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

            $lineinfos = new Lineinfo();
            $lineinfos->name = $request->name;
           	$lineinfos->sim = $request->sim;
            $lineinfos->whatsapp = $request->whatsapp;
            $lineinfos->status = $request->status;
            

            $result = $lineinfos->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.lineinfos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lineinfos = Lineinfo::findOrFail($id);
        
        return view('admin.pages.lineinfos.show',compact('lineinfos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lineinfos = Lineinfo::findOrFail($id);
        return view('admin.pages.lineinfos.edit',compact('lineinfos'));
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
        $lineinfos = Lineinfo::find($id);
        $lineinfos->name = $request->name;
        $lineinfos->sim = $request->sim;
        $lineinfos->whatsapp = $request->whatsapp;
        $lineinfos->status = $request->status;
        
        
        $result = $lineinfos->save();
        return redirect()->route('admin.lineinfos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $lineinfos = Lineinfo::find($id);
        $lineinfos->delete();
        return redirect()->route('admin.lineinfos.index');

    }
}
