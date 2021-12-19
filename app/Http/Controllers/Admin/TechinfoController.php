<?php

namespace App\Http\Controllers\Admin;
use App\Tech;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class TechinfoController extends Controller
{
    public function index()
    {
        
       $techinfos = Tech::all();
        return view('admin.pages.techinfos.index',compact('techinfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.techinfos.create');
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

            $techinfos = new Tech();
            $techinfos->tech_first_name = $request->tech_first_name;
            $techinfos->tech_middle_name = $request->tech_middle_name;
            $techinfos->tech_last_name = $request->tech_last_name;
            $techinfos->tech_cell_number = $request->tech_cell_number;
            $techinfos->tech_email = $request->tech_email;
           $techinfos->tech_skype = $request->tech_skype;
           $techinfos->tech_whatsapp = $request->tech_whatsapp;
           $techinfos->status = $request->status;

            $result = $techinfos->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.techinfos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $techinfos = Tech::findOrFail($id);
        
        return view('admin.pages.techinfos.show',compact('techinfos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $techinfos = Tech::findOrFail($id);
        return view('admin.pages.techinfos.edit',compact('techinfos'));
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
        $techinfos = Tech::find($id);
        $techinfos->tech_first_name = $request->tech_first_name;
        $techinfos->tech_middle_name = $request->tech_middle_name;
        $techinfos->tech_last_name = $request->tech_last_name;
        $techinfos->tech_cell_number = $request->tech_cell_number;
        $techinfos->tech_email = $request->tech_email;
        $techinfos->tech_skype = $request->tech_skype;
        $techinfos->tech_whatsapp = $request->tech_whatsapp;
        $techinfos->status = $request->status;
        
        $result = $techinfos->save();
        return redirect()->route('admin.techinfos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $techinfos = Tech::find($id);
        $techinfos->delete();
        return redirect()->route('admin.techinfos.index');

    }
}
