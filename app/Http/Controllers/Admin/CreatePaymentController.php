<?php

namespace App\Http\Controllers\Admin;

use App\CreatePayment;
use App\Carrier;
use App\CarrierBuy;

use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreatePaymentController extends Controller
{
   public function index()
    {
        $cpayments = CreatePayment::all();
        $cpinfo = Carrier::all();
        return view('admin.pages.cpayments.index',compact('cpayments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cpayments = CreatePayment::all();
        $cpinfo = Carrier::all();
        return view('admin.pages.cpayments.create',compact('cpayments','cpinfo'));
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

            $cpayments = new CreatePayment();
            $cpayments->carrier_info_id = $request->carrier_info_id;
            $cpayments->time_range = $request->time_range;
            $cpayments->whatsapp_mints = $request->whatsapp_mints;
            $cpayments->create_payment = $request->create_payment; 
           	$cpayments->gsm_mints = $request->gsm_mints; 
            $cpayments->status = $request->status;
            $result = $cpayments->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.cpayments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cpayments = CreatePayment::findOrFail($id);
        
        return view('admin.pages.cpayments.show',compact('cpayments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cpayments = CreatePayment::findOrFail($id);
        $cpinfo = Carrier::all();
        return view('admin.pages.cpayments.edit',compact('cpayments','cpinfo'));
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
        $cpayments = CreatePayment::find($id);
        $cpayments->carrier_info_id = $request->carrier_info_id;
        $cpayments->time_range = $request->time_range;
        $cpayments->whatsapp_mints = $request->whatsapp_mints;
        $cpayments->create_payment = $request->create_payment;
        $cpayments->gsm_mints = $request->gsm_mints;
        $cpayments->status = $request->status;
        $result = $cpayments->save();
        return redirect()->route('admin.cpayments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $cpayments = CreatePayment::find($id);
        $cpayments->delete();
        return redirect()->route('admin.cpayments.index');

    }
}
