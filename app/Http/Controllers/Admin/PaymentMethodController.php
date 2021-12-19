<?php

namespace App\Http\Controllers\Admin;

use App\Paymentmethod;
use App\Https\Traits\FileUploadTrait;
use Exception;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        $paymethods = Paymentmethod::all();
        return view('admin.pages.paymethods.index',compact('paymethods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paymethods = Paymentmethod::all();
      
        return view('admin.pages.paymethods.create',compact('paymethods'));
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

            $paymethods = new Paymentmethod();
            $paymethods->name = $request->name;
            
            $paymethods->status = $request->status;
            $result = $paymethods->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.paymethods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymethods = Paymentmethod::findOrFail($id);
        
        return view('admin.pages.paymethods.show',compact('paymethods'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paymethods = Paymentmethod::findOrFail($id);

        return view('admin.pages.paymethods.edit',compact('paymethods'));
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
        $paymethods =Paymentmethod::find($id);
        $paymethods->name = $request->name;
       
        $paymethods->status = $request->status;
        
        $result = $paymethods->save();
        return redirect()->route('admin.paymethods.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $paymethods = Paymentmethod::find($id);
        $paymethods->delete();
        return redirect()->route('admin.paymethods.index');

    }
}
