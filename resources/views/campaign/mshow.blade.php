@extends('layouts.app')


@section('content')
<div class="jumbotron">
<div class="container">

<img class="thumbnail" height=200px src={{   asset('storage/campaignimages/'.$campaign->imgurl)   }} alt="{{$campaign->cmpname}}"/>

  <h1 class="display-3">{{$campaign->cmpname }}</h1>
  <a class="btn btn-sm btn-info" href="/donors/create/{{ $campaign->id }}">Donate</a>

</div>
</div>
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">

<h5>Details</h5>

<p>{{$campaign->description}}</p>
<hr/>
<h5>Amount to Raise</h5>
<p>{{$campaign->amount}}</p>
<hr/>

<h5>Start Date</h5>
<p>{{$campaign->start_date}}</p>
<hr/>

<h5>End Date</h5>
<p>{{$campaign->end_date}}</p>
<hr/>


</div>
<div class="col-md-3 col-lg-3 col-sm-3 pull-right">

</div>





@endsection