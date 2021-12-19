<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Currency;
use App\Countries;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currency = DB::table('currncey')->get();
         
        return view('admin.pages.currency.index',compact('currency'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currency = Currency::all();
        $countries = Countries::all();
         return view('admin.pages.currency.create',compact('currency','countries'));
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

            $currency = new Currency();
            $currency->currncey_name = $request->currncey_name;
            $currency->countries_id = $request->countries_id;
            $currency->status = $request->status;
            $result = $currency->save();

        } catch (Exception $e) {

            return $e->getMessage();}

             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.currency.index');
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
        $currency = Currency::findOrFail($id);
        
        return view('admin.pages.currency.show',compact('currency'));
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
        $currency = Currency::findOrFail($id);
        $countries = Countries::all();
        return view('admin.pages.currency.edit',compact('currency','countries'));
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
          $currency = Currency::find($id);
          $currency->currncey_name = $request->currncey_name;
          $currency->countries_id = $request->countries_id;
          $currency->status = $request->status;
          $result = $currency->save();
          return redirect()->route('admin.currency.index');
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
        $currency = Currency::find($id);
        $currency->delete();
        return redirect()->route('admin.currency.index');
        //
    }
}
