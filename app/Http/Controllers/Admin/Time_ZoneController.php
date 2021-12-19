<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TimeZone;
use App\Https\Traits\FileUploadTrait;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class Time_ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $timezone = DB::table('timezone')->get();
        // $timezone = TimeZone::all();
        return view('admin.pages.timezone.index',compact('timezone'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.timezone.create');
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

            $timezone = new TimeZone();
            $timezone->timezone_name = $request->timezone_name;
            $timezone->actual = $request->actual;
           $timezone->status = $request->status;
            $result = $timezone->save();

        } catch (Exception $e) {

            return $e->getMessage();
                }
             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.timezone.index');
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
        $timezone = TimeZone::findOrFail($id);
        
        return view('admin.pages.timezone.show',compact('timezone'));
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
        $timezone = TimeZone::findOrFail($id);
        return view('admin.pages.timezone.edit',compact('timezone'));
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
            $timezone = new TimeZone();
            $timezone->timezone_name = $request->timezone_name;
            $timezone->actual = $request->actual;
           $timezone->status = $request->status;
            $result = $timezone->save();
            return redirect()->route('admin.timezone.index');
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
        $timezone = TimeZone::find($id);
        $timezone->delete();
        return redirect()->route('admin.timezone.index');
        //
    }
}
