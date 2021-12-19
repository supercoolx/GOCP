<?php

namespace App\Http\Controllers\Admin;
use App\Accountant;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountantController extends Controller
{
     public function index()
    {
        $accountantinfos = Accountant::all();
        return view('admin.pages.accountantinfos.index',compact('accountantinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.accountantinfos.create');
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

            $accountantinfos = new Accountant();
            $accountantinfos->accountant_first_name = $request->accountant_first_name;
            $accountantinfos->accountant_middle_name = $request->accountant_middle_name;
            $accountantinfos->accountant_last_name = $request->accountant_last_name;
            $accountantinfos->accountant_cell_number = $request->accountant_cell_number;
            $accountantinfos->accountant_email = $request->accountant_email;
           $accountantinfos->accountant_skype = $request->accountant_skype;
           $accountantinfos->accountant_whatsapp = $request->accountant_whatsapp;
           $accountantinfos->status = $request->status;
            $result = $accountantinfos->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.accountantinfos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $accountantinfos = Accountant::findOrFail($id);
        
        return view('admin.pages.accountantinfos.show',compact('accountantinfos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $accountantinfos = Accountant::findOrFail($id);
        return view('admin.pages.accountantinfos.edit',compact('accountantinfos'));
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
        $accountantinfos = Accountant::find($id);
        $accountantinfos->accountant_first_name = $request->accountant_first_name;
        $accountantinfos->accountant_middle_name = $request->accountant_middle_name;
        $accountantinfos->accountant_last_name = $request->accountant_last_name;
        $accountantinfos->accountant_cell_number = $request->accountant_cell_number;
        $accountantinfos->accountant_email = $request->accountant_email;
        $accountantinfos->accountant_skype = $request->accountant_skype;
        $accountantinfos->accountant_whatsapp = $request->accountant_whatsapp;
        $accountantinfos->status = $request->status;
        
        $result = $accountantinfos->save();
        return redirect()->route('admin.accountantinfos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $accountantinfos = Accountant::find($id);
        $accountantinfos->delete();
        return redirect()->route('admin.accountantinfos.index');

    }
}
