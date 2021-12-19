<?php

namespace App\Http\Controllers\Admin;
use App\Buyer;
use App\Https\Traits\FileUploadTrait;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class BuyerController extends Controller
{
    public function index()
    {
        $buyerinfos = DB::table('buyer_info')->get();
        // $buyerinfos = Buyer::all();
        return view('admin.pages.buyerinfos.index',compact('buyerinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.buyerinfos.create');
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

            $buyerinfos = new Buyer();
            $buyerinfos->first_name = $request->first_name;
            $buyerinfos->middle_name = $request->middle_name;
            $buyerinfos->last_name = $request->last_name;
            $buyerinfos->cell_number = $request->cell_number;
            $buyerinfos->email = $request->email;
            $buyerinfos->skype = $request->skype;
            $buyerinfos->whatsapp = $request->whatsapp;
            $buyerinfos->status = $request->status;
            $result = $buyerinfos->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.buyerinfos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buyerinfos = Buyer::findOrFail($id);
        
        return view('admin.pages.buyerinfos.show',compact('buyerinfos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buyerinfos = Buyer::findOrFail($id);
        return view('admin.pages.buyerinfos.edit',compact('buyerinfos'));
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
        $buyerinfos = Buyer::find($id);
        $buyerinfos->first_name = $request->first_name;
        $buyerinfos->middle_name = $request->middle_name;
        $buyerinfos->last_name = $request->last_name;
        $buyerinfos->cell_number = $request->cell_number;
        $buyerinfos->email = $request->email;
        $buyerinfos->skype = $request->skype;
        $buyerinfos->whatsapp = $request->whatsapp;
        $buyerinfos->status = $request->status;
        
        $result = $buyerinfos->save();
        return redirect()->route('admin.buyerinfos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $buyerinfos = Buyer::find($id);
        $buyerinfos->delete();
        return redirect()->route('admin.buyerinfos.index');

    }
}
