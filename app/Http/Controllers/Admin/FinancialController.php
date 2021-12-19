<?php

namespace App\Http\Controllers\Admin;
use App\Financial;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinancialController extends Controller
{
    public function index()
    {
        $financials = Financial::all();
        return view('admin.pages.financials.index',compact('financials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.financials.create');
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

            $financials = new Financial();
            $financials->account_name = $request->account_name;
            $financials->payment_method = $request->payment_method;
            
            $financials->status = $request->status;
            $result = $financials->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.financials.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $financials = Financial::findOrFail($id);
        
        return view('admin.pages.financials.show',compact('financials'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $financials = Financial::findOrFail($id);
        return view('admin.pages.financials.edit',compact('financials'));
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
        $financials = Financial::find($id);
        $financials->account_name = $request->account_name;
        $financials->payment_method = $request->payment_method;
        
        $financials->status = $request->status;
        
        $result = $financials->save();
        return redirect()->route('admin.financials.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $financials = Financial::find($id);
        $financials->delete();
        return redirect()->route('admin.financials.index');

    }
}
