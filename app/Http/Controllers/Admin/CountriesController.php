<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Countries;
use App\Https\Traits\FileUploadTrait;
use App\TimeZone;
use Illuminate\Support\Facades\Session;
class CountriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries= Countries::all();
        return view('admin.pages.countries.index',compact('countries'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries= Countries::all();
        $timezone = TimeZone::all();
         return view('admin.pages.countries.create',compact('countries','timezone'));
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
        request()->validate([
            'pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        try {

            $countries = new Countries();
            $countries->name = $request->name;
            $countries->timezone_id = $request->timezone_id;
           $countries->status = $request->status;
            $result = $countries->save();

        } catch (Exception $e) {

            return $e->getMessage();}

             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.countries.index');
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
        $countries = Countries::findOrFail($id);
        
        return view('admin.pages.countries.show',compact('countries'));
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
        $countries = Countries::findOrFail($id);
        $timezone = TimeZone::all();
        return view('admin.pages.countries.edit',compact('countries','timezone'));
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
         request()->validate([
            'pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        try {

            $countries = Countries::find($id);
            $countries->name = $request->name;
            $countries->timezone_id = $request->timezone_id;
           $countries->status = $request->status;
            $result = $countries->save();

        } catch (Exception $e) {

            return $e->getMessage();}

             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.countries.index');
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
        $countries = Countries::find($id);
        $countries->delete();
        return redirect()->route('admin.countries.index');
        //
    }
}
