@extends('layouts.app')


@section('content')

<h4>Donations</h4>

<a class="btn btn-sm btn-info" href = "/donation/create" >Create New Donation</a>

<hr/>

<div class="row">
@foreach($donation as $donation)

  <div class="col-md-6">
    <div class="card mb-4 shadow-sm">
       <img class="thumbnail" height=200px src={{   asset('storage/donationimages/'.$donation->imgurl)   }} alt="{{$donation->cmpname}}"/>

      <div class="card-body">
      <h4 class="card-text">{{$donation->dntname}}</h4>

        <p class="card-text">{{$donation->description}}</p>
        <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Total</p>
              <p class="card-text">{{$donation->amount}}</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Raised</p>
              <p class="card-text">{{$donation->raised_amount}}</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Balance</p>
              <p class="card-text">{{$donation->balance_amount}}</p>
            </div>
          </div>
        </div>
        </div>
        </div>
      
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a class="btn btn-sm btn-outline-secondary" href="/donation/{{ $donation->id }}" style="text-decoration: none">View More</a>
            <a class="btn btn-sm btn-info" href="/donationdonors/create/{{$donation->id}}" style="text-decoration: none">Donate</a>

          </div>
        </div>

      </div>


        </div>
      </div>


 


  @endforeach


  
  </div>
  </div>




<!-- Modal -->
@endsection