<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Dealer;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Session;
class DealerController extends Controller
{
    
    public function index()
    {
        $dealers = Dealer::all();
        return view('admin.pages.dealers.index',compact('dealers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.dealers.create');
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

            $dealers = new dealer();
            $dealers->name = $request->name;
            $dealers->serial = $request->serial;
            $dealers->category = $request->category;
            $dealers->quantity = $request->quantity;
            $dealers->total = $request->total;
            $dealers->commission = $request->commission;
            $dealers->date = date("Y-m-d h:m:s", strtotime($request->date));
            $dealers->status = $request->status;
            $dealers->pic = '';
            if ($request->hasFile('pic')) {
                $dealers->pic = uploadImage($request,'pic','uploads/images');
            }

            $result = $dealers->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.dealers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dealers = Dealer::findOrFail($id);
        
        return view('admin.pages.dealers.show',compact('dealers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dealers = Dealer::findOrFail($id);
        return view('admin.pages.dealers.edit',compact('dealers'));
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
        $dealers = Dealer::find($id);
        $dealers->name = $request->name;
        $dealers->serial = $request->serial;
        $dealers->category = $request->category;
        $dealers->quantity = $request->quantity;
        $dealers->total = $request->total;
        $dealers->commission = $request->commission;
        $dealers->date = date("Y-m-d h:m:s", strtotime($request->date));
        $dealers->status = $request->status;
        $dealers->pic = '';
        if ($request->hasFile('pic')) {
            $dealers->pic = uploadImage($request,'pic','uploads/images');
        }
        $result = $dealers->save();
        return redirect()->route('admin.dealers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $dealers = Dealer::find($id);
        $dealers->delete();
        return redirect()->route('admin.dealers.index');

    }
}
