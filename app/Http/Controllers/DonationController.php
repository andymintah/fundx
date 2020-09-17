<?php

namespace App\Http\Controllers;

use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class DonationController extends Controller
{

    public function index()
    {
       
        $donation = Donation::all();
        return view('donation.index',['donation'=> $donation]); 

 
    }

    public function mindex(){
        if (Auth::check()){
            $donation = Donation::where('user_id', auth::user()->id)->get();
            return view('donation.mindex',['donation'=> $donation]); 
           }
           return view('auth.login');
    }


    public function create()
    {
        return view ('donation.create');

    }

    public function store(Request $request)
    {
        if(Auth::check()){
            $this->validate($request, [
                'name' => 'required',
                'imgurl' => 'image|max:1999'
              ]);
        
            $filenameWithExt = $request->file('imgurl')->getClientOriginalName();
             $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
             $extension = $request->file('imgurl')->getClientOriginalExtension();
            $filenameToStore = $filename.'_'.time().'.'.$extension;
             $path= $request->file('imgurl')->storeAs('public/donationimages', $filenameToStore);
        
             $donation = new Donation;
              $donation->dntname = $request->input('name');
              $donation->description = $request->input('description');
              $donation->start_date = date("Y-m-d", strtotime($request->input('start-date')));
              $donation->end_date = date("Y-m-d", strtotime($request->input('end-date')));
            $donation->amount = $request->input('amount');
              $donation->items = $request->input('items');
              $donation->address = $request->input('address');

              $donation->category = $request->input('category');
              $donation->user_id = Auth::user()->id;


              $donation->imgurl = $filenameToStore;
        
             $donation->raised_amount = '0';
             $donation->withdrawn_amount   = '0';
            $donation->status ='N';
             $donation->save();

              return redirect('/donation')->with('success', 'Donation Created');
 
        }
        return view ('home')->with('error', 'Please Log In');
    }
    public function raiseamount($donation_id, $amount){

           


        $amountUpdate = Donation::where('id',$donation_id)->update([
                'raised_amount' => DB::raw('raised_amount +' .$amount)
                ]);

            
 
    }

 

    public function withdrawamount($donation_id, $amount){

        $amountUpdate = Donation::where('id',$donation_id)->where ('withdrawable_balance','>=', $amount)->
            update([
                'withdrawn_amount' => DB::raw('withdrawn_amount +' .$amount)
                ]);

            

    }


    public function show(Donation $donation)
    {
        $donation = Donation::find($donation->id);

        return view('donation.show',['donation'=>$donation]);
    }
    public function mshow(Donation $donation)
    {
        if (auth::check()){
            $donation = Donation::find($donation->id);

        return view('donation.mshow',['donation'=>$donation]);
        }
        return view ('auth.login');
            

        
    }

    public function edit(Company $company)
    {
        $donation = Donation::find($donation->id);

        return view('donation.edit',['donation'=>$donation]);

    } 


    public function update(Request $request, Donation $donation)
    {
        $filenameWithExt = $request->file('imgurl')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('imgurl')->getClientOriginalExtension();
       $filenameToStore = $filename.'_'.time().'.'.$extension;
        $path= $request->file('imgurl')->storeAs('public/donationimages', $filenameToStore);
   
 
        $donationUpdate = Donation::where('id',$donation->id)->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description')



        ]);
    if($donationUpdate){
        return redirect()->route('donation.show',['donation'=>$donation->id])
        ->with('success','Donation Updated Successfully');
    }
        return back()->withInput();
    }

   
    public function destroy(Donation $donation)
    {
        $findDonation = Donation::find($donation->id);
        if($findDonation->delete()){
            return redirect()->route('donation.index')
            ->with('success','Donation deleted Successfully');

        }
        return back()->withInput()->with('error','Donation could not be deleted');
    }
}
