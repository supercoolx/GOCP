<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CarrierBuy;
use App\CellularCompanies;
use App\Routesaleprice;
use App\Carrier;
use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;

class Carrier_Buy_RoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrierbuy = CarrierBuy::all();
        return view('admin.pages.carrierbuy.index',compact('carrierbuy'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $carrierbuy = CarrierBuy::all();
        $cellularcompanies = CellularCompanies::all();
        $route = Routesaleprice::all();
        $carrier = Carrier::all();
        return view('admin.pages.carrierbuy.create',compact('carrierbuy','cellularcompanies','route','carrier'));
        //
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

            $carrierbuy = new CarrierBuy();
            $carrierbuy->carrier_by_rout_name = $request->carrier_by_rout_name;
            $carrierbuy->cellular_companies_id = $request->cellular_companies_id;
            $carrierbuy->carrier_info_id = $request->carrier_info_id;
            $carrierbuy->route_sale_price_id = $request->route_sale_price_id;
            $carrierbuy->sc_commision = $request->sc_commision;
            $carrierbuy->status = $request->status;
            $result = $carrierbuy->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.carrierbuy.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrierbuy = CallingPlan::findOrFail($id);
        
        return view('admin.pages.carrierbuy.show',compact('carrierbuy'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrierbuy = CallingPlan::findOrFail($id);
        $cellularcompanies = CellularCompanies::all();
        $route = Routesaleprice::all();
        $carrier = Carrier::all();
        return view('admin.pages.carrierbuy.edit',compact('carrierbuy','cellularcompanies','route','carrier'));
        //
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
         $carrierbuy = new cpsystem();
            $carrierbuy->carrier_by_rout_name = $request->carrier_by_rout_name;
            $carrierbuy->cellular_companies_id = $request->cellular_companies_id;
            $carrierbuy->carrier_info_id = $request->carrier_info_id;
            $carrierbuy->route_sale_price_id = $request->route_sale_price_id;
            $carrierbuy->sc_commision = $request->sc_commision;
            $carrierbuy->status = $request->status;
            $result = $carrierbuy->save();
            return redirect()->route('admin.carrierbuy.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrierbuy = Carrier_Buy_RoutController::find($id);
        $carrierbuy->delete();
        return redirect()->route('admin.carrierbuy.index');
        //
    }
}
