@extends('layouts.dashboard')

@include('profile.dashboard')
@section('content')

<h4>Profile</h4>

<hr/>

<div class="row">
<div class= "col-md-10">
@foreach($userprofile as $userprofile)


<hr>

<h4>Welcome {{$userprofile->firstname}}</h4>

<br/>
<hr/>
<h4>Full Name</h4>
<h5>{{$userprofile->firstname}} {{$userprofile->othernames}} {{$userprofile->lastname}}</h5>

<br/>
<hr/>

<h4>Contact Details</h4>
<h5>{{$userprofile->contactno1}}</h5> 
<h5>{{$userprofile->contactno2}}</h5> 
<h5>{{$userprofile->contactno3}}</h5> 

<hr/>
<h5>{{$userprofile->email}}</h5> 
  


 


  @endforeach


  
  </div>
  </div>




<!-- Modal -->
@endsection