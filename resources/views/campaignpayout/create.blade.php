@extends('layouts.app')


@section('content')
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">


<div class="container">
<!-- Example row of columns -->
<div class="row">

  <div class="col-md-12 col-lg-12 col-sm-12">
  <form method="post" action="{{route('campaignpayout.store')}}" method="POST">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="post">
  
 
  </div> <div class="form-group">
    <input class="form-control" id="amount"  name="amount" required aria-describedby="Amount" placeholder="Amount" />
    <input type="hidden" name="campaign_id" value="{{$campaign_id}}">

  </div>
  









  <div class="form-group">

  <button type="submit" class="btn btn-primary">Withdraw</button>

  </div>

</form>
   
  


</div>

<div class="col-md-3 col-lg-3 col-sm-3 pull-right">
     
</div>



@endsection