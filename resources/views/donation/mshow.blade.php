@extends('layouts.dashboard')

@include('profile.dashboard')


@section('content')

<div class="jumbotron">
<div class="container">

<img class="thumbnail" height=200px src={{   asset('storage/donationimages/'.$donation->imgurl)   }} alt="{{$donation->cmpname}}"/>

  <h1 class="display-3">{{$donation->dntname }}</h1>
  <a class="btn btn-sm btn-info" href="/donationpayout/create/{{$donation->id }}" >Withdraw</a>

</div>
</div>
<div class="row">
<div class="col-md-7 col-lg-7 col-sm-7 pull-left">





<h5>Details</h5>

<p>{{$donation->description}}</p>
<hr/>
<h5>Amount to Raise</h5>
<p>{{$donation->amount}}</p>
<hr/>

<h5>Start Date</h5>
<p>{{$donation->start_date}}</p>
<hr/>

<h5>End Date</h5>
<p>{{$donation->end_date}}</p>
<hr/>




</div>
<div class="col-md-5 col-lg-5 col-sm-5 pull-right">
<div class="row">
<div class="col-md-3 col-lg-3 col-sm-3 pull-left">

<h5>Target Amount</h5>
<p>{{$donation->amount}}</p>
</div>
<div class="col-md-3 col-lg-3 col-sm-3 pull-left">

<h5>Amount Raised</h5>
<p>{{$donation->raised_amount}}</p>
</div>

<div class="col-md-3 col-lg-3 col-sm-3 pull-left">

<h5>Amount Left To Raise</h5>
<p>{{$donation->target_balance}}</p>
</div>
<div class="col-md-3 col-lg-3 col-sm-3 pull-left">

<h5>Amount Withdrawn</h5>
<p>{{$donation->withdrawn_amount}}</p>
</div>





</div>
</div>




@endsection