@extends('layouts.dashboard')

@include('profile.dashboard')

@section('content')

 @foreach($donation as $donation)
 <div class="row">

 <div class="col-md-10">
 <h4>{{$donation->dntname}}</h4>
 <p class="lead">{{$donation->description}}</p>
 <a class="btn btn-lg btn-primary" href="/donation/{{ $donation->id }}/edit" role="button">Edit</a>
 <a class="btn btn-lg btn-primary" href="/donation/{{ $donation->id }}" role="button">Delete</a>
 <a class="btn btn-lg btn-primary" href="/donation/mshow/{{ $donation->id }}" role="button">View More</a>

</div>
</div>

 
@endforeach









 




@endsection