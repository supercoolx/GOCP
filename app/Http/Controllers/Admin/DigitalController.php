<?php

namespace App\Http\Controllers\Admin;
use App\Digital;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DigitalController extends Controller
{
    public function index()
    {
        $digitals = Digital::all();
        return view('admin.pages.digitals.index',compact('digitals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.digitals.create');
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

            $digitals = new Digital();
            $digitals->trasnfer_name = $request->trasnfer_name;
            $digitals->account = $request->account;
            $digitals->status = $request->status;

            
            $result = $digitals->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

   
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.digitals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $digitals = Digital::findOrFail($id);
        
        return view('admin.pages.digitals.show',compact('digitals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $digitals = Digital::findOrFail($id);
        return view('admin.pages.digitals.edit',compact('digitals'));
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
        $digitals = Digital::find($id);
        $digitals->trasnfer_name = $request->trasnfer_name;
        $digitals->account = $request->account;
        
        $digitals->status = $request->status;
        
        $result = $digitals->save();
        return redirect()->route('admin.digitals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $digitals = Digital::find($id);
        $digitals->delete();
        return redirect()->route('admin.digitals.index');

    }
}
