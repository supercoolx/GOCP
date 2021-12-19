<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Bankinfo;
use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;

class BankinfoController extends Controller
{
      public function index()
    {
        $bankinfos = Bankinfo::all();
        return view('admin.pages.bankinfos.index',compact('bankinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.bankinfos.create');
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

            $bankinfos = new Bankinfo();
            $bankinfos->bank_name = $request->bank_name;
           
            $bankinfos->bank_address = $request->bank_address;
            $bankinfos->bank_city = $request->bank_city;
            $bankinfos->bank_country = $request->bank_country;
            $bankinfos->bank_ZIP = $request->bank_ZIP;
            $bankinfos->bank_phone = $request->bank_phone;
            $bankinfos->bank_email = $request->bank_email;
            $bankinfos->bank_swift = $request->bank_swift;
            $bankinfos->bank_account_email = $request->bank_account_email;
            $bankinfos->bank_account_number = $request->bank_account_number;
            $bankinfos->bank_ACH = $request->bank_ACH;
            $bankinfos->status = $request->status;
            

            $result = $bankinfos->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.bankinfos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bankinfos = Bankinfo::findOrFail($id);
        
        return view('admin.pages.bankinfos.show',compact('bankinfos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bankinfos = Bankinfo::findOrFail($id);
        return view('admin.pages.bankinfos.edit',compact('bankinfos'));
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
        $bankinfos = Bankinfo::find($id);
        $bankinfos->bank_name = $request->bank_name;
       
        $bankinfos->bank_address = $request->bank_address;
        $bankinfos->bank_city = $request->bank_city;
        $bankinfos->bank_country = $request->bank_country;
        $bankinfos->bank_ZIP = $request->bank_ZIP;
        $bankinfos->bank_phone = $request->bank_phone;
        $bankinfos->bank_email = $request->bank_email;
        
        $bankinfos->bank_swift = $request->bank_swift;
        $bankinfos->bank_account_email = $request->bank_account_email;
        $bankinfos->bank_account_number = $request->bank_account_number;
        $bankinfos->bank_ACH = $request->bank_ACH;
        $bankinfos->status = $request->status;
        
        
        $result = $bankinfos->save();
        return redirect()->route('admin.bankinfos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $bankinfos = Bankinfo::find($id);
        $bankinfos->delete();
        return redirect()->route('admin.bankinfos.index');

    }
}
