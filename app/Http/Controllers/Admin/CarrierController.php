<?php

namespace App\Http\Controllers\Admin;
use App\Carrier;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
     public function index()
    {
        $carrierinfos = Carrier::all();
        return view('admin.pages.carrierinfos.index',compact('carrierinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.carrierinfos.create');
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

            $carrierinfos = new Carrier();
            $carrierinfos->carrier_name = $request->carrier_name;
            $carrierinfos->carrier_address = $request->carrier_address;
            $carrierinfos->carrier_city = $request->carrier_city;
            $carrierinfos->carrier_country = $request->carrier_country;
            $carrierinfos->carrier_ZIP = $request->carrier_ZIP;
            $carrierinfos->status = $request->status;
            $result = $carrierinfos->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.carrierinfos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrierinfos = Carrier::findOrFail($id);
        
        return view('admin.pages.carrierinfos.show',compact('carrierinfos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrierinfos = Carrier::findOrFail($id);
        return view('admin.pages.carrierinfos.edit',compact('carrierinfos'));
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
        $carrierinfos = Carrier::find($id);
        $carrierinfos->carrier_name = $request->carrier_name;
        $carrierinfos->carrier_address = $request->carrier_address;
        $carrierinfos->carrier_city = $request->carrier_city;
        $carrierinfos->carrier_country = $request->carrier_country;
        $carrierinfos->carrier_ZIP = $request->carrier_ZIP;
        
        $carrierinfos->status = $request->status;
        
        $result = $carrierinfos->save();
        return redirect()->route('admin.carrierinfos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $carrierinfos = Carrier::find($id);
        $carrierinfos->delete();
        return redirect()->route('admin.carrierinfos.index');

    }
}
