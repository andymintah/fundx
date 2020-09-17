<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\CampaignAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class CampaignController extends Controller
{

    public function index()
    {
 
        $campaign = Campaign::all();
        return view('campaign.index',['campaign'=> $campaign]); 

 
    }

    public function mindex(){
        if (Auth::check()){
            $campaign = Campaign::where('user_id', Auth::user()->id)->get();
            return view('campaign.mindex',['campaign'=> $campaign]); 
           }
           return view('auth.login');
    }

    public function raiseamount($campaign_id, $amount){

        $amountUpdate = Campaign::where('id',$campaign_id)->
            update([
                'raised_amount' => DB::raw('raised_amount +' .$amount)
                ]);

            
 
    }

    public function withdrawamount($campaign_id, $amount){

        $amountUpdate = Campaign::where('id',$campaign_id)->where ('withdrawable_balance','>=', $amount)->
            update([
                'withdrawn_amount' => DB::raw('withdrawn_amount +' .$amount)
                ]);

            

    }
    public function withdraw(){
        return view('campaign.withdraw');
    }
    public function create()
    {
        return view ('campaign.create');

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
             $path= $request->file('imgurl')->storeAs('public/campaignimages', $filenameToStore);
        
             $campaign = new Campaign;
              $campaign->cmpname = $request->input('name');
              $campaign->description = $request->input('description');
              $campaign->start_date = date("Y-m-d", strtotime($request->input('start-date')));
              $campaign->end_date = date("Y-m-d", strtotime($request->input('end-date')));
              $campaign->amount = $request->input('amount');
              $campaign->category = $request->input('category_id');
              $campaign->user_id = Auth::user()->id;


              $campaign->imgurl = $filenameToStore;
              $campaign->raised_amount = '0';
              $campaign->withdrawn_amount   = '0';
              $campaign->status = 'N';
 
              $campaign->save();

            
              return redirect('/campaign')->with('success', 'Campaign Created');
 
        }
        return view ('home')->with('error', 'Please Log In');
    }



    public function show(Campaign $campaign)
    {
        $campaign = Campaign::find($campaign->id);

        return view('campaign.show',['campaign'=>$campaign]);
    }

    public function mshow(Campaign $campaign)
    {
        if (auth::check()){
            $campaign = Campaign::find($campaign->id);

        return view('campaign.mshow',['campaign'=>$campaign]);
        }
        return ('auth.login');
            

        
    }

    public function edit(Campaign $campaign)
    {
        $campaign = Campaign::find($campaign->id);

        return view('campaign.edit',['campaign'=>$campaign]);

    } 


    public function update(Request $request, Campaign $campaign)
    {
        $filenameWithExt = $request->file('imgurl')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('imgurl')->getClientOriginalExtension();
       $filenameToStore = $filename.'_'.time().'.'.$extension;
        $path= $request->file('imgurl')->storeAs('public/campaignimages', $filenameToStore);
   
 
        $campaignUpdate = Campaign::where('id',$campaign->id)->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description')



        ]);
    if($campaignUpdate){
        return redirect()->route('campaign.show',['campaign'=>$campaign->id])
        ->with('success','Campaign Updated Successfully');
    }
        return back()->withInput();
    }

   
    public function destroy(Campaign $campaign)
    {
        $findCampaign = Campaign::find($campaign->id);
        if($findCampaign->delete()){
            return redirect()->route('campaign.index')
            ->with('success','Campaign deleted Successfully');

        }
        return back()->withInput()->with('error','Campaign could not be deleted');
    }
}
