<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DontaionPayout;

class DonationPayoutController extends Controller
{
    public function create($donation_id)
    {
        return view ('donationpayout.create')->with('donation_id',$donation_id);

    }

    public function store(Request $request)
    {
           
             $donationPayout = new DonationPayout;
             $donationPayout->cmgn_id = $request->input('donation_id');

              $donationPayout->amount = $request->input('amount');
              app(DonationController::class)->withdrawamount($request->input('donation_id'),$request->input('amount'));

        
              $donationPayout->save();
            //  $donor->donation->
              return redirect('/donation')->with('success', 'Withdrawal Completed');
 
        }
}
