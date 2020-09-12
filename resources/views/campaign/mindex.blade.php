@extends('layouts.dashboard')

@include('profile.dashboard')

@section('content')

 @foreach($campaign as $campaign)
 <div class="row">

 <div class="col-md-10">
 <h4>{{$campaign->cmpname}}</h4>
 <p class="lead">{{$campaign->description}}</p>
 <a class="btn btn-lg btn-primary" href="/campaign/{{ $campaign->id }}/edit" role="button">Edit</a>
 <a class="btn btn-lg btn-primary" href="/campaign/{{ $campaign->id }}" role="button">Delete</a>
 <a class="btn btn-lg btn-primary" href="/campaign/mshow/{{ $campaign->id }}" role="button">View More</a>

</div>
</div>

 
@endforeach









 




@endsection