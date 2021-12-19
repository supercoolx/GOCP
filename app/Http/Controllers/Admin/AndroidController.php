<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Android;
use App\CellularCompanies;
use App\CallingPlan;
use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;

class AndroidController extends Controller
{
    public function index()
    {
        $androids = Android::all();
        return view('admin.pages.androids.index',compact('androids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $callingplan = CallingPlan::all();
        $cellularcompanies = CellularCompanies::all();
        $androids = Android::all();
        return view('admin.pages.androids.create',compact('callingplan','cellularcompanies','androids'));
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

            $androids = new Android();
            $androids->sim_no = $request->sim_no;
           	$androids->phone_number = $request->phone_number;
           	$androids->imei = $request->imei;
            $androids->calling_plane_costing_id = $request->calling_plane_costing_id;
            $androids->cellular_companies_id = $request->cellular_companies_id;
            $androids->status = $request->status;
            $result = $androids->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

       dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.androids.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $androids = Android::findOrFail($id);
        
        return view('admin.pages.androids.show',compact('androids'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $androids = Android::findOrFail($id);
         $callingplan = CallingPlan::all();
        return view('admin.pages.androids.edit',compact('androids'));
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
        $androids = Android::find($id);
        $androids->sim_no = $request->sim_no;
       	$androids->phone_number = $request->phone_number;
       	$androids->imei = $request->imei;
        $androids->calling_plane_costing_id = $request->calling_plane_costing_id;
        $androids->cellular_companies_id = $request->cellular_companies_id;
       	
        $androids->status = $request->status;
        
        
        $result = $androids->save();
        return redirect()->route('admin.androids.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $androids = Android::find($id);
        $androids->delete();
        return redirect()->route('admin.androids.index');

    }
}
