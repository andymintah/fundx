@extends('layouts.app')


@section('content')
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
<div class="jumbotron">
<div class="container">
<img class="thumbnail" height=200px src={{   asset('storage/userprofileimages/'.$userprofile->dpurl)   }} alt="{{$userprofile->firstname}}"/>

  <h3 class="display-6">Welcome, {{$userprofile->firstname }}</h3>
  <button type="button" class="btn btn-sm btn-info"><a href="/userprofiledonors/create/{{ $userprofile->id }}" style="text-decoration: none">Donate</a></button>

</div>
</div>
<h5>Details</h5>

<p>{{$userprofile->firstname}}  {{$userprofile->othername}}   {{$userprofile->lastname}}  </p>
<hr/>
<p>{{$userprofile->email}}</p>
<hr/>
<p>{{$userprofile->contactno1}}</p><br/>
<p>{{$userprofile->contactno2}}</p><br/>
<p>{{$userprofile->contactno3}}</p>

<hr/>




</div>
<div class="col-md-3 col-lg-3 col-sm-3 pull-right">

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection