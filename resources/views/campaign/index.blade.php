@extends('layouts.app')


@section('content')

<h4>Campaigns</h4>

<a class="btn btn-sm btn-primary pull-right"  href = "/campaign/create" style="text-decoration: none">Create New Campaign</a>

<hr/>

<div class="row">
@foreach($campaign as $campaign)

  <div class="col-md-6">
    <div class="card mb-4 shadow-sm">
       <img class="thumbnail" height=200px src={{   asset('storage/campaignimages/'.$campaign->imgurl)   }} alt="{{$campaign->cmpname}}"/>

      <div class="card-body">
      <h4 class="card-text">{{$campaign->cmpname}}</h4>

        <p class="card-text">{{$campaign->description}}</p>



  <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Total</p>
        <p class="card-text">{{$campaign->amount}}</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Raised</p>
        <p class="card-text">{{$campaign->raised_amount}}</p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Balance</p>
        <p class="card-text">{{$campaign->balance_amount}}</p>
      </div>
    </div>
  </div>


</div>



<br/>


        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a class="btn btn-sm btn-outline-secondary" href="/campaign/{{ $campaign->id }}">View More</a>
            <a class="btn btn-sm btn-info" href="/donors/create/{{$campaign->id}}" >Donate</a>

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