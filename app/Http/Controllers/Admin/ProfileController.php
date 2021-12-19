<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Profile;
use App\Https\Traits\FileUploadTrait;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(Auth()->user()->roles('admins_manage')){
        //     $profiles = Profile::all();    
        // }else{
            $profiles = Profile::where('user_id',auth::user()->id)->get();
        // }
        // dd($profiles);
        return view('admin.pages.profiles.index',compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('admin.pages.profiles.create');
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     request()->validate([
    //         'pic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    //     request()->validate([
    //         'picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    //     try {

    //         $profiles = new Profile();
    //         $profiles->fname = $request->fname;
    //         $profiles->cname = $request->cname;
    //         $profiles->idcard = $request->idcard;
    //         $profiles->phone_number = $request->phone_number;
    //         $profiles->address = $request->address;
    //         $profiles->user_id = $request->user_id;
    //         $profiles->status = $request->status;
    //         $profiles->user_id = auth()->user()->id;
            
    //         $profiles->pic = '';
    //         if ($request->hasFile('pic')) {
    //             $profiles->pic = uploadImage($request,'pic','uploads/images');
    //         }
    //         $profiles->picture = '';
    //         if ($request->hasFile('picture')) {
    //             $profiles->picture = uploadImage($request,'picture','uploads/images');
    //         }

    //         $result = $profiles->save();

    //     } catch (Exception $e) {

    //         return $e->getMessage();
    //     }

    //     // dd($result);
    //     Session::flash('info','Record update successfully !');

    //     return redirect()->route('admin.profiles.index');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profiles = Profile::findOrFail($id);
        
        return view('admin.pages.profiles.show',compact('profiles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profiles = Profile::findOrFail($id);
        return view('admin.pages.profiles.edit',compact('profiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     // dd($request->all());
    //     $profiles =  Profile::find($id);
    //         $profiles->fname = $request->fname;
    //         $profiles->cname = $request->cname;
    //         $profiles->idcard = $request->idcard;
    //         $profiles->phone_number = $request->phone_number;
    //         $profiles->address = $request->address;
    //         $profiles->user_id = $request->user_id;
    //         $profiles->status = $request->status;
    //         $profiles->user_id = auth()->user()->id;
    //         $profiles->pic = '';
    //         $profiles->status = 1;
    //         if ($request->hasFile('back_side_idcard')) {
    //             $profiles->pic = uploadImage($request,'back_side_idcard','uploads/images');
    //         }
    //         $profiles->picture = '';
    //         if ($request->hasFile('front_side_idcard')) {
    //             $profiles->picture = uploadImage($request,'front_side_idcard','uploads/images');
    //         }
    //     $result = $profiles->save();
    //     return redirect()->route('admin.profiles.index');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
        
    //     $profiles = Profile::find($id);
    //     $profiles->delete();
    //     return redirect()->route('admin.profiles.index');

    // }
}
