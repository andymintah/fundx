<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserProfile;
use Illuminate\Support\Facades\Auth;


class UserProfileController extends Controller
{

    public function index()
    {
 
       
        $userprofile = UserProfile::where('user_id', Auth::user()->id)->get();

        return view('profile.index',['userprofile'=>$userprofile]);

 
    }

    
    public function create()
    {
        return view ('profile.create');

    }


    public function show(){
        $userprofile = UserProfile::where('user_id', Auth::user()->id)->get();

        return view('profile.index',['userprofile'=>$userprofile]);
    }

    public function store(Request $request)
    {
        if(Auth::check()){
            $this->validate($request, [
                'name' => 'required',
                'dpurl' => 'image|max:1999'
              ]);
        
            $filenameWithExt = $request->file('dpurl')->getClientOriginalName();
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
             $extension = $request->file('dpurl')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
             $path= $request->file('dpurl')->storeAs('public/userprofileimages', $filenameToStore);
        
             $userprofile = new UserProfile;
              $userprofile->lastname = $request->input('lastname');
              $userprofile->firstname = $request->input('firstname');
              $userprofile->othernames = $request->input('othernames');

              $userprofile->nationalidtype = $request->input('nationalidtype');
              $userprofile->nationalidno = $request->input('nationalidno');
              $userprofile->email = $request->input('email');
              $userprofile->contactno1 = $request->input('contactno1');
              $userprofile->contactno2 = $request->input('contactno2');
              $userprofile->contactno3 = $request->input('contactno3');
              $userprofile->contactno3 = "User";

              $userprofile->user_id = Auth::user()->id;


              $userprofile->dpurl = $filenameToStore;

 
              $userprofile->save();

            
              return redirect('/userprofile')->with('success', 'UserProfile Created');
 
        }
        return view ('home')->with('error', 'Please Log In');
    }



  
    public function edit(UserProfile $userprofile)
    {
        $userprofile = UserProfile::find($userprofile->id);

        return view('profile.edit',['userprofile'=>$userprofile]);

    } 


    public function update(Request $request, UserProfile $userprofile)
    {
        $filenameWithExt = $request->file('imgurl')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('imgurl')->getClientOriginalExtension();
       $filenameToStore = $filename.'_'.time().'.'.$extension;
        $path= $request->file('imgurl')->storeAs('public/userprofileimages', $filenameToStore);
   
 
        $userprofileUpdate = UserProfile::where('id',$userprofile->id)->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description')



        ]);
    if($userprofileUpdate){
        return redirect()->route('profile.show',['userprofile'=>$userprofile->id])
        ->with('success','UserProfile Updated Successfully');
    }
        return back()->withInput();
    }

   
    public function destroy(UserProfile $userprofile)
    {
        $findUserProfile = UserProfile::find($userprofile->id);
        if($findUserProfile->delete()){
            return redirect()->route('profile.index')
            ->with('success','UserProfile deleted Successfully');

        }
        return back()->withInput()->with('error','UserProfile could not be deleted');
    }
   
 
    

}
