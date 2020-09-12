<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use Illuminate\Support\Facades\Auth;


class UserProfileController extends Controller
{
    public function index()
    {
       
        if (Auth::check())
        {

        $userprofile = UserProfile::where('user_id', auth::user()->id);
        return view('profile.dashboard',['userprofile'=> $userprofile]); 

        }
        return view('auth.login');

 
    }
    public function cmindex()
    {
        if (Auth::check())
        {

        $campaign = Campaign::where('user_id', auth::user()->id);
        return view('profile.cmindex',['campaign'=> $campaign]); 

        }
        return view('auth.login');
    }

    public function dnindex()
    {
        if (Auth::check())
        {

        $donation = Donation::where('user_id', auth::user()->id);
        return view('profile.dnindex',['donation'=> $donation]); 

        }
        return view('auth.login');
    }
 
    

}
