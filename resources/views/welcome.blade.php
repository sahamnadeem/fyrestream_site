@extends('themes.layouts.master')

@section('main-content')
    <div class="body-image" style="background-image: url('assets/img/Layer355.png');background-color: rgba(0,0,0,0.52);background-repeat: no-repeat;background-size: cover;background-position: center; margin-top:6.4em" >
        <div class="login-form">
            <div class="row">
                <div class="col-8" style="background-image: url('assets/img/Ball2.png');background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                <div class="col" style="padding:20px;">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h3 style="font-weight: bold;">Sign In</h3>
                            </div>
                        </div>
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col"><label style="font-size: 1em;color:black">Email </label><input type="text" name="email" id="email" class="input-st" placeholder="Email Address" required="" style="width:100%;"></div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col"><label style="font-size: 1em;color:black">Password</label><label id="forget"><a href="#" style="font-size: 0.7em;">Did you forget your password?</a></label><input type="password"  name="password" id="passowrd" placeholder="password" class="form-group input-st" required=""
                                                                                                                                                                                                                    style="width:100%;"></div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col"><button class="btn btn-primary btn-block login" type="submit">SIGN IN</button></div>
                            </div>
                        </form>
                        <div class="row justify-content-center mt-3" style="margin:10px;">
                            <div class="col"><button class="btn btn-primary btn-block" type="button" style="width:100%;padding:10px;font-size:0.8em;background-color:#106bd1;border:none;border-radius:3px;"><img src="assets/img/fb.png">&nbsp;&nbsp;&nbsp; Log In with facebook</button></div>
                        </div>
                        <div class="row justify-content-center" style="margin:10px;">
                            <div class="col"><button class="btn btn-primary btn-block" type="button" style="width: 100%;padding: 10px;font-size: 0.8em;background-color: #00aaf2;border: none;border-radius: 3px;"><img src="assets/img/twitter.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log in with twitter</button></div>
                        </div>
                        <div class="row justify-content-center" style="margin:10px;">
                            <div class="col"><button class="btn btn-primary btn-block" type="button" style="width: 100%;padding: 10px;font-size: 0.8em;background-color: #fe8a02;border: none;border-radius: 3px;"><img src="assets/img/amazon.png">&nbsp;&nbsp;&nbsp; Login in with amazon</button></div>
                        </div>
                        <div class="row">
                            <div class="col"><input type="checkbox"><label>&nbsp; Keep me signed in<a href="#">&nbsp;Details</a></label></div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col text-center">
                                <p style="color: #b4b4b4;">Not yet a Fyre Stream member?</p><button class="btn btn-primary btn-block" type="button" style="background-color:#cfcfcf;color:black;border:none"><a href="{{route('user-register')}}">Join Fyrestream for Free</a></button></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
