<?php

namespace App\Http\Controllers\Admin;
use App\CarrierPayment;
use App\CarrierBuy;

use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class CarrierPaymentController extends Controller
{
    public function index()
    {
        $carrierpays = CarrierPayment::all();
        return view('admin.pages.carrierpays.index',compact('carrierpays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrierpays = CarrierPayment::all();
        $carrierbuy = CarrierBuy::all();
        return view('admin.pages.carrierpays.create',compact('carrierpays','carrierbuy'));
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

            $carrierpays = new CarrierPayment();
            $carrierpays->carrier_buy_rout_id = $request->carrier_buy_rout_id;
            $carrierpays->time_range = $request->time_range;
            $carrierpays->total_mints = $request->total_mints;
           	$carrierpays->create_payment = $request->create_payment; 
            $carrierpays->status = $request->status;
            $result = $carrierpays->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.carrierpays.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrierpays = CarrierPayment::findOrFail($id);
        
        return view('admin.pages.carrierpays.show',compact('carrierpays'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrierpays = CarrierPayment::findOrFail($id);
        $carrierbuy = CarrierBuy::all();
        return view('admin.pages.carrierpays.edit',compact('carrierpays','carrierbuy'));
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
        $carrierpays = CarrierPayment::find($id);
        $carrierpays->carrier_buy_rout_id = $request->carrier_buy_rout_id;
        $carrierpays->time_range = $request->time_range;
        $carrierpays->total_mints = $request->total_mints;
        $carrierpays->create_payment = $request->create_payment;
        $carrierpays->status = $request->status;
        $result = $carrierpays->save();
        return redirect()->route('admin.carrierpays.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $carrierpays = CarrierPayment::find($id);
        $carrierpays->delete();
        return redirect()->route('admin.carrierpays.index');

    }
}
