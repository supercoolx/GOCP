<?php

namespace App\Http\Controllers\Admin;
use App\Whatsapp;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WhatsappController extends Controller
{
    public function index()
    {
        $whatsapps = Whatsapp::all();
        return view('admin.pages.whatsapps.index',compact('whatsapps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.whatsapps.create');
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

            $whatsapps = new Whatsapp();
            $whatsapps->whatsapp_number = $request->whatsapp_number;
            $whatsapps->phone_number = $request->phone_number;
            $whatsapps->status = $request->status;
            $result = $whatsapps->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.whatsapps.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $whatsapps = Whatsapp::findOrFail($id);
        
        return view('admin.pages.whatsapps.show',compact('whatsapps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $whatsapps = Whatsapp::findOrFail($id);
        return view('admin.pages.whatsapps.edit',compact('whatsapps'));
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
        $whatsapps = Whatsapp::find($id);
        $whatsapps->whatsapp_number = $request->whatsapp_number;
        $whatsapps->phone_number = $request->phone_number;
        $whatsapps->status = $request->status;
        
        $result = $whatsapps->save();
        return redirect()->route('admin.whatsapps.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $whatsapps = Whatsapp::find($id);
        $whatsapps->delete();
        return redirect()->route('admin.whatsapps.index');

    }
}
