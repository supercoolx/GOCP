<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Spatie\Permission\Models\Role;
use App\Profile;
use Illuminate\Support\Str;
use App\ReferalLinks;
use App\ReferalPayments;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('auth.login');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'refer_links' => Str::random(70),
            'referer_link_id' => (isset($data['referer_link_id']) && !empty($data['referer_link_id'])) ? base64_decode($data['referer_link_id']) : ' '
        ]);

        $role = Role::where('name','dealer')->first();
        $user->assignRole([$role->id]);
        Profile::create([
            'fname' => $user->name,
            'user_id' => $user->id
        ]);
        
        if(isset($data['referer_link_id']) && !empty($data['referer_link_id'])){
            // dd($user->id,$data['referer_link_id']);
            $users = User::where('refer_links',base64_decode($data['referer_link_id']))->orderBy('id','DESC')->first();
            // dd($users);
            if(!empty($users)){
                $rl = ReferalLinks::select('id','refer_link_views')->where('referal_link_user_id',base64_decode($data['referer_link_id']))->orderBy('refer_link_views','DESC')->first();
                // dd($rl);
                $rf = new ReferalLinks();
                $rf->user_id = $users->id;
                $rf->referal_link_user_id = base64_decode($data['referer_link_id']);
                $rf->refer_links = $users->refer_links;
                $rf->refer_link_views = (isset($rl) && !empty($rl->refer_link_views)) ? ($rl->refer_link_views + 1) : 1; 
                $rf->save();

                if($rf->refer_link_views > 2 && $rf->refer_link_views < 12){
                    $counter = $rf->refer_link_views - 3;
                    $rp = new ReferalPayments();
                    $rp->user_id = $users->id;
                    $rp->referer_counter = $counter > 0 ? $counter : 1;
                    $rp->price = 5;
                    $rp->save();
                }
            }
        }
        
        return $user;

    }

    public function refererRegister($id){
        $referer_link_id = $id ?? ''; 
        return view('auth.register',compact('referer_link_id'));
    }


}
