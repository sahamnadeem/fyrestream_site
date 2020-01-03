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
@endsection
