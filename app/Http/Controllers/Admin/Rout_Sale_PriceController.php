<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Routesaleprice;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Rout;
use Illuminate\Support\Facades\DB;
class Rout_Sale_PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $routsaleprice = DB::table('route_sale_price')->get();
            
        // $routsaleprice = Routesaleprice::all();
        return view('admin.pages.routsaleprice.index',compact('routsaleprice'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *  
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $rout = Rout::all();
        $routsaleprice = Routesaleprice::all();
        return view('admin.pages.routsaleprice.create',compact('rout','routsaleprice'));
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

            $routsaleprice = new Routesaleprice();
            $routsaleprice->create_route_id = $request->create_route_id;
            $routsaleprice->sale_price = $request->sale_price;
           $routsaleprice->status = $request->status;
            $result = $routsaleprice->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.routsaleprice.index');
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
        $routsaleprice = Routesaleprice::findOrFail($id);
        $rout = Rout::all();
        return view('admin.pages.routsaleprice.show',compact('routsaleprice', 'rout'));
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
        $routsaleprice = Routesaleprice::findOrFail($id);
        $rout = Rout::all();
        return view('admin.pages.routsaleprice.edit',compact('routsaleprice','rout'));
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
          $routsaleprice = Routesaleprice::findOrFail($id);
          $routsaleprice->create_route_id = $request->create_route_id;
          $routsaleprice->sale_price = $request->sale_price;
          $routsaleprice->status = $request->status;
          $result = $routsaleprice->save();
            return redirect()->route('admin.routsaleprice.index');
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
        $routsaleprice = Routesaleprice::find($id);
        $routsaleprice->delete();
        return redirect()->route('admin.routsaleprice.index');
        //
    }
}
