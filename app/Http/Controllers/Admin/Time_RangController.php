<?php

namespace App\Http\Controllers\Admin;

use App\TimeRang;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class Time_RangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timerang = TimeRang::all();
        return view('admin.pages.timerang.index',compact('timerang'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.timerang.create');
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

            $timerang = new TimeRang();
            $timerang->from_time_stamp = $request->from_time_stamp;
            $timerang->to_time_stamp = $request->to_time_stamp;
           $timerang->status = $request->status;
            $result = $timerang->save();

        } catch (Exception $e) {

            return $e->getMessage();

        }

             Session::flash('info','Record update successfully !');

        return redirect()->route('admin.timerang.index');
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
        $timerang = TimeRang::findOrFail($id);
        
        return view('admin.pages.timerang.show',compact('timerang'));
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
         $timerang = TimeRang::findOrFail($id);
        return view('admin.pages.timerang.edit',compact('timerang'));
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
          $timerang = new TimeRang();
          $timerang->from_time_stamp = $request->from_time_stamp;
          $timerang->to_time_stamp = $request->to_time_stamp;
          $timerang->status = $request->status;
          $result = $timerang->save();
            return redirect()->route('admin.timerang.index');
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
        $timerang = TimeRang::find($id);
        $timerang->delete();
        return redirect()->route('admin.timerang.index');
        //
    }
}
