@extends('themes.layouts.master')

@section('main-content')
    <div class="body-image" style="background-image: url('assets/img/Layer355.png');background-color: rgba(0,0,0,0.52);background-repeat: no-repeat;background-size: cover;background-position: center; margin-top:6.4em" >
        <div class="login-form">
            <div class="row">
                <div class="col-8" style="background-image: url('assets/img/Ball2.png');background-position: center;background-size: cover;background-repeat: no-repeat;"></div>
                <div class="col" style="padding:20px;">
                    <div class="row justify-content-center p-3">
                        <img src="{{ asset('assets/img/Fyrestream Final Logo.png') }}" width="70%"/>
                    </div>
                    <ul class="nav nav-tabs mb-3 justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">SIGN UP</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
                                        <div class="col"><label style="font-size: 1em;color:black">Password</label><input type="password"  name="password" id="passowrd" placeholder="password" class="form-group input-st" required=""
                                                                                                                                                                                                                            style="width:100%;"></div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col"><button class="btn btn-primary btn-block login" type="submit">SIGN IN</button></div>
                                    </div>
                                </form>


                                <div class="row mt-2" style="font-weight: 500; font-size: 0.75em;">
                                    <div class="col text-left">
                                        <a href="#" style="text-decoration: none; color:red;">Forgot your username?</a>
                                    </div>
                                    <div class="col text-right">
                                        <a href="#" style="text-decoration: none; color:red;">Forgot your password?</a>
                                    </div>
                                </div>
{{--                                <div class="row justify-content-center mt-3" style="margin:10px;">--}}
{{--                                    <div class="col"><button class="btn btn-primary btn-block" type="button" style="width:100%;padding:10px;font-size:0.8em;background-color:#106bd1;border:none;border-radius:3px;"><img src="assets/img/fb.png">&nbsp;&nbsp;&nbsp; Log In with facebook</button></div>--}}
{{--                                </div>--}}
{{--                                <div class="row justify-content-center" style="margin:10px;">--}}
{{--                                    <div class="col"><button class="btn btn-primary btn-block" type="button" style="width: 100%;padding: 10px;font-size: 0.8em;background-color: #00aaf2;border: none;border-radius: 3px;"><img src="assets/img/twitter.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Log in with twitter</button></div>--}}
{{--                                </div>--}}
{{--                                <div class="row justify-content-center" style="margin:10px;">--}}
{{--                                    <div class="col"><button class="btn btn-primary btn-block" type="button" style="width: 100%;padding: 10px;font-size: 0.8em;background-color: #fe8a02;border: none;border-radius: 3px;"><img src="assets/img/amazon.png">&nbsp;&nbsp;&nbsp; Login in with amazon</button></div>--}}
{{--                                </div>--}}
                                <div class="row mt-5">
                                    <div class="col"><input type="checkbox"><label>&nbsp; Keep me signed in<a href="#">&nbsp;Details</a></label></div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <hr style="height: 2px;"></div>
                                    or
                                    <div class="col">
                                        <hr style="height: 2px;"></div>
                                </div>

                                <div class="row justify-content-center mt-2">
                                    <div class="col text-center">
{{--                                        <p style="color: #b4b4b4;">Not yet a Fyre Stream member?</p>--}}
                                        <button class="btn btn-primary btn-block" type="button" style="background-color:#f5c000;color:black;border:none; padding: 10px;"><a style="text-decoration: none; color: black; font-weight: 600;" href="{{route('user-register')}}">Create a New Account</a></button></div>
                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <h3 style="font-weight: bold;">Sign In</h3>
                                    </div>
                                </div>
                                <form method="post" action="{{route('user-create')}}">
                                    @csrf
                                    <div class="row justify-content-center">
                                        <div class="col"><label style="font-size: 1em;color:black">Username</label><input type="text" id="name" name="name" class="input-st" placeholder="User Name" required="" style="width:100%;"></div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col"><label style="font-size: 1em;color:black"> Email</label><input type="text" id="email"  name="email" class="input-st" required="" placeholder="Email Address" style="width:100%;"></div>
                                    </div>
                                    <div class="row justify-content-center mt-3">
                                        <div class="col"><label style="font-size: 1em;color:black">Password</label><label id="forget"><a href="#"   style="font-size: 0.7em;">Did you forget your password?</a></label><input type="password" id="password" name="password" class="form-group input-st" required="" style="width:100%;"></div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col"><button class="btn btn-primary btn-block login" type="submit">Singup </button></div>
                                    </div>
                                    <p>Already have an acount <strong><a href="{{route('welcome')}}">Login</a></strong> </p>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
