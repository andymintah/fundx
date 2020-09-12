<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DonationDonors;


class DonationDonorController extends Controller
{
    public function create($donation_id)
    {
        return view ('donationdonors.create')->with('donation_id',$donation_id);

    }

    public function store(Request $request)
    {
           
             $donationdonor = new DonationDonors;
             $donationdonor->dnt_id = $request->input('donation_id');
              $donationdonor->firstname = $request->input('firstname');
              $donationdonor->lastname = $request->input('lastname');
              $donationdonor->phoneno = $request->input('phoneno');
              $donationdonor->email = $request->input('email');

              $donationdonor->amount = $request->input('amount');
              app(DonationController::class)->raiseamount($request->input('donation_id'),$request->input('amount'));

        
              $donationdonor->save();

              return redirect('/donation')->with('success', 'Donation Completed');
 
        }
    }

