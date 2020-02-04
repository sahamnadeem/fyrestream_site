@extends('themes.layouts.master')

@section('main-content')
    <div class="container" style="margin-top: 7em;">
        <form action="{{ route('update-profile',['id'=>$user->id]) }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" value="{{ $user->name }}" disabled class="form-control">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="address" value="{{ $user->profile->address }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Phone No.</label>
                        <input type="text" name="phone_no" class="form-control" value="{{ $user->profile->phone_no }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Hours of Availability</label>
                        <input type="text" name="hours_of_operation" value="{{ $user->profile->hours_of_operation }}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">General Rules</label>
                        <textarea rows="3" name="general_roles" class="form-control">{{ $user->profile->general_roles }}</textarea>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">About</label>
                        <textarea rows="3" name="about_us" class="form-control">{{ $user->profile->about_us }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Deals</label>
                        <input type="text" name="deal" class="form-control" value="{{ $user->profile->deal }}">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Youtube</label>
                        <input type="text" name="youtube" class="form-control" value="{{ $user->profile->youtube }}"/>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Instagram</label>
                        <input type="text" name="instagram" class="form-control" value="{{ $user->profile->instagram }}"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button class="btn btn-danger btn-block myupdatebtn" type="submit">Update</button>
                </div>
            </div>
        </form>
    </div>
    <br/>
    <br/>
    <br/>
@endsection





