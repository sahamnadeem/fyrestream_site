<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FolllowController extends Controller
{

    public function index(Request $request){
        $ext = auth()->user()->followings()->where('user_id', $request->user_id)->exists();
        if(!$ext) {
            auth()->user()->followings()->attach($request->follower_id);
            return response()->json(['message' => 'successfully followed','flag'=>1]);
        }
        else
        {
            auth()->user()->followings()->detach($request->follower_id);
            return response()->json(['message'=>'unfollowed successufully','flag'=>0]);
        }
    }
}
