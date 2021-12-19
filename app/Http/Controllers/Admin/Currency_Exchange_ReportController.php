<?php

namespace App\Http\Controllers\Admin;
use App\CurrencyExchangeReport;
use App\Currency;
use App\Https\Traits\FileUploadTrait;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Currency_Exchange_ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currencyexchange = DB::table('currency_exchange_report')->get();
        // dd($currencyexchange);
         // $currencyexchange = CurrencyExchangeReport::all();
        return view('admin.pages.currencyexchange.index',compact('currencyexchange'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $currencyexchange = CurrencyExchangeReport::all();
         $currency = Currency::all();
        return view('admin.pages.currencyexchange.create',compact('currencyexchange','currency'));
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
        // dd($request->all());
        request()->validate([
            'pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        try {

            $currencyexchange = new CurrencyExchangeReport();
            $currencyexchange->currncey_id = $request->currncey_id;
            $currencyexchange->date = $request->date;
            $currencyexchange->currency_value = $request->currency_value;
            $currencyexchange->usa_dollar_value = $request->usa_dollar_value;
            
            $result = $currencyexchange->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.currencyexchange.index');
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
           $currencyexchange = CurrencyExchangeReport::findOrFail($id);
        
        return view('admin.pages.currencyexchange.show',compact('currencyexchange'));
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
          $currencyexchange = CurrencyExchangeReport::findOrFail($id);
           $currency = Currency::all();
        return view('admin.pages.currencyexchange.edit',compact('currencyexchange','currency'));
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
         $currencyexchange = CurrencyExchangeReport::find($id);
            $currencyexchange->currncey_id = $request->currncey_id;
            $currencyexchange->date = $request->date;
            $currencyexchange->currency_value = $request->currency_value;
            $currencyexchange->usa_dollar_value = $request->usa_dollar_value;
            // $currencyexchange->status = $request->status;
            $result = $currencyexchange->save();
        return redirect()->route('admin.currencyexchange.index');
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
        $currencyexchange = CurrencyExchangeReport::find($id);
        $currencyexchange->delete();
        return redirect()->route('admin.currencyexchange.index');
        //
    }
}
