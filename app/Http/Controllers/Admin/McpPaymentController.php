<?php

namespace App\Http\Controllers\Admin;

use App\McpPayment;
use App\Mcp;

use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class McpPaymentController extends Controller
{
  public function index()
    {
        $mcppayments = McpPayment::all();
        return view('admin.pages.mcppayments.index',compact('mcppayments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mcppayments = McpPayment::all();
        $mcp = Mcp::all();
        return view('admin.pages.mcppayments.create',compact('mcppayments','mcp'));
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

            $mcppayments = new McpPayment();
            $mcppayments->mcp_id = $request->mcp_id;
            $mcppayments->time_range = $request->time_range;
            $mcppayments->total_mints = $request->total_mints;
           	$mcppayments->create_payment = $request->create_payment; 
            $mcppayments->status = $request->status;
            $result = $mcppayments->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.mcppayments.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mcppayments = McpPayment::findOrFail($id);
        
        return view('admin.pages.mcppayments.show',compact('mcppayments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mcppayments = McpPayment::findOrFail($id);
        $mcp = Mcp::all();
        return view('admin.pages.mcppayments.edit',compact('mcppayments','mcp'));
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
        $mcppayments = McpPayment::find($id);
        $mcppayments->mcp_id = $request->mcp_id;
        $mcppayments->time_range = $request->time_range;
        $mcppayments->total_mints = $request->total_mints;
        $mcppayments->create_payment = $request->create_payment;
        $mcppayments->status = $request->status;
        $result = $mcppayments->save();
        return redirect()->route('admin.mcppayments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $mcppayments = McpPayment::find($id);
        $mcppayments->delete();
        return redirect()->route('admin.mcppayments.index');

    }
}
