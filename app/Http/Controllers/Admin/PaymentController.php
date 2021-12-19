<?php

namespace App\Http\Controllers\Admin;

use App\Payment;
use App\Https\Traits\FileUploadTrait;
use Exception;
use App\Invoice;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('admin.pages.payments.index',compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payments = Payment::all();
        $invoices = Invoice::all();
        return view('admin.pages.payments.create',compact('invoices','payments'));
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

            $payments = new Payment();
            $payments->payment_to_cs = $request->payment_to_cs;
            $payments->amount = $request->amount;
            $payments->number = $request->number;
            $payments->rang_dates = $request->rang_dates;
            $payments->invoice_id = $request->invoice_id;
            $payments->status = $request->status;
            $result = $payments->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.payments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $payments = Payment::findOrFail($id);
        
        return view('admin.pages.payments.show',compact('payments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payments = Payment::findOrFail($id);

        $invoices= Lineinfo::all();
        return view('admin.pages.payments.edit',compact('payments','invoices'));
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
        $payments = Payment::find($id);
        $payments->payment_to_cs = $request->payment_to_cs;
        $payments->amount = $request->amount;
        $payments->number = $request->number;
        $payments->rang_dates = $request->rang_dates;
        $payments->invoice_id = $request->invoice_id;
        $payments->status = $request->status;
        
        $result = $payments->save();
        return redirect()->route('admin.payments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $payments = Payment::find($id);
        $payments->delete();
        return redirect()->route('admin.payments.index');

    }
}
