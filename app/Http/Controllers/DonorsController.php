<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donor;

class DonorsController extends Controller
{
    public function create($campaign_id)
    {
        return view ('donors.create')->with('campaign_id',$campaign_id);

    }

    public function store(Request $request)
    {
           
             $donor = new Donor;
             $donor->cmgn_id = $request->input('campaign_id');
              $donor->firstname = $request->input('firstname');
              $donor->lastname = $request->input('lastname');
              $donor->phoneno = $request->input('phoneno');
              $donor->email = $request->input('email');

              $donor->amount = $request->input('amount');
              app(CampaignController::class)->raiseamount($request->input('campaign_id'),$request->input('amount'));

        
              $donor->save();
            //  $donor->campaign->
              return redirect('/campaign')->with('success', 'Donation Completed');
 
        }
    }

