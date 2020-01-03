<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index($id=0){
        $followss = [];
        $folp=[];
        $fol = User::with('followers')->whereId(auth()->id())->first();
        if ($fol->followers){
            foreach ($fol->followers as $t){$folp[] = $t->id;}
        }
        $follows = DB::table('followers')
            ->where('follower_id','=',auth()->id())
            ->whereIn('user_id',$folp)
            ->get();
        if ($follows->count()>0){
            foreach ($follows as $fols){
                $followss[] = User::whereId($fols->user_id)->with('profile')->first();

            }
        }


        $user = User::whereId($id !=0? $id : auth()->id())->with('profile')->first();
        $rating = $user->rating()->avg('rating')??1;
        $views = $this->getmb($user);
        return view('themes.profile.index', compact('user','rating','views','followss'));
    }

    public function getmb(User $user){
        if ($user->profile->views < 1000000) {
            // Anything less than a million
            $n_format = number_format($user->profile->views/ 10000) . ' K';
        } else if ($user->profile->views < 1000000000) {
            // Anything less than a billion
            $n_format = number_format($user->profile->views / 1000000, 2) . ' M';
        } else {
            // At least a billion
            $n_format = number_format($user->profile->views / 1000000000, 2) . ' B';
        }
        return $n_format;
    }

}
