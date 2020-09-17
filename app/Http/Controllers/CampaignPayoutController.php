<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CampaignPayout;

class CampaignPayoutController extends Controller
{
    public function create($campaign_id)
    {
        return view ('campaignpayout.create')->with('campaign_id',$campaign_id);

    }

    public function store(Request $request)
    {
           
             $campaignPayout = new CampaignPayout;
             $campaignPayout->cmgn_id = $request->input('campaign_id');

              $campaignPayout->amount = $request->input('amount');
              app(CampaignController::class)->withdrawamount($request->input('campaign_id'),$request->input('amount'));

        
              $campaignPayout->save();
            //  $donor->campaign->
              return redirect('/campaign')->with('success', 'Withdrawal Completed');
 
        }
}
