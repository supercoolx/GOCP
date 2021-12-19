<?php

namespace App\Http\Controllers\Admin;

use App\CarrierInvoice;
use App\CarrierBuy;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarriervoiceController extends Controller
{
    public function index()
    {
        $carrierinvoices = CarrierInvoice::all();
        return view('admin.pages.carrierinvoices.index',compact('carrierinvoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrierinvoices = CarrierInvoice::all();
        $carrierbuy = CarrierBuy::all();
        return view('admin.pages.carrierinvoices.create',compact('carrierinvoices','carrierbuy'));
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

            $carrierinvoices = new CarrierInvoice();
            $carrierinvoices->carrier_buy_rout_id = $request->carrier_buy_rout_id;
            $carrierinvoices->time_range = $request->time_range;
            $carrierinvoices->total_mints = $request->total_mints;
            
            $carrierinvoices->status = $request->status;
            $result = $carrierinvoices->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.carrierinvoices.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrierinvoices = CarrierInvoice::findOrFail($id);
        
        return view('admin.pages.carrierinvoices.show',compact('carrierinvoices'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrierinvoices = CarrierInvoice::findOrFail($id);
        $carrierbuy = CarrierBuy::all();
        return view('admin.pages.carrierinvoices.edit',compact('carrierinvoices','carrierbuy'));
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
        $carrierinvoices = CarrierInvoice::find($id);
        $carrierinvoices->carrier_buy_rout_id = $request->carrier_buy_rout_id;
        $carrierinvoices->time_range = $request->time_range;
        $carrierinvoices->total_mints = $request->total_mints;
        $carrierinvoices->status = $request->status;
        $result = $carrierinvoices->save();
        return redirect()->route('admin.carrierinvoices.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $carrierinvoices = CarrierInvoice::find($id);
        $carrierinvoices->delete();
        return redirect()->route('admin.carrierinvoices.index');

    }
}
