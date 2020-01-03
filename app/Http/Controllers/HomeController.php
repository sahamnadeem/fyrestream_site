<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Profile;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }


    public function index()
    {
//        $d = (auth()->user()->id);
//        dd($d);

        if (\auth()->user()){
            return view('themes.pages.index');
        }else{
            return view('welcome');
        }
    }


    public function login(Request $request)
    {
        if (Auth::attempt(["email" => $request->email, "password" =>$request->password])) {
                return view('themes.pages.index');
        }else{
            return redirect()->back();
        }
    }

    public function register()
    {
        return view('register');
    }

    public function userResigter(RegisterRequest $request)
    {
        $user = new User;
        $user = $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->attachRole('user');
        $profile = new Profile;
        $profile->create([
            'user_id'=>$user->id,
            'about_us'=>'',
            'general_roles'=>'',
            'address'=>'',
            'phone_no'=>'',
            'hours_of_operation'=>'',
            'deal'=>'',
            'views'=>1,
            'youtube'=>'',
            'instagram'=>'',
            'picture'=>''
        ]);
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect('/');
        }else{
            return redirect('/');
        }
    }

    public function userlogout()
    {
        return redirect('/user-login');
    }
}
