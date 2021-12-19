<?php

namespace App\Http\Controllers\Admin;
use App\Carriersale;
use App\Https\Traits\FileUploadTrait;
// use Exception;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CarriersaleController extends Controller
{
     public function index()
    {
        $carriersales = DB::table('carrier_sales')->get();
        
        // $carriersales = Carriersale::all();
        return view('admin.pages.carriersales.index',compact('carriersales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.carriersales.create');
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

            $carriersales = new Carriersale();
            $carriersales->user_name = $request->user_name;
            $carriersales->password = $request->password;
            $carriersales->first_name = $request->first_name;
            $carriersales->last_name = $request->last_name;
            $carriersales->cell_number = $request->cell_number;
           $carriersales->email = $request->email;
           $carriersales->skype = $request->skype;
           $carriersales->whatsapp = $request->whatsapp;
            $result = $carriersales->save();

        } catch (Exception $e) {

            return $e->getMessage();
        }

        // dd($result);
        Session::flash('info','Record update successfully !');

        return redirect()->route('admin.carriersales.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carriersales = Carriersale::findOrFail($id);
        
        return view('admin.pages.carriersales.show',compact('carriersales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carriersales = Carriersale::findOrFail($id);
        return view('admin.pages.carriersales.edit',compact('carriersales'));
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
        $carriersales = Carriersale::find($id);
        $carriersales->user_name = $request->user_name;
        $carriersales->password = $request->password;
        $carriersales->first_name = $request->first_name;
        $carriersales->last_name = $request->last_name;
        $carriersales->cell_number = $request->cell_number;
        $carriersales->email = $request->email;
        $carriersales->skype = $request->skype;
        $carriersales->whatsapp = $request->whatsapp;
       
        $carriersales->status = $request->status;
        
        $result = $carriersales->save();
        return redirect()->route('admin.carriersales.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $carriersales = Carriersale::find($id);
        $carriersales->delete();
        return redirect()->route('admin.carriersales.index');

    }
}
