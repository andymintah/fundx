@extends('layouts.dashboard')

@include('profile.dashboard')


@section('content')
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">


<div class="container">
<!-- Example row of columns -->
<div class="row">

  <div class="col-md-12 col-lg-12 col-sm-12">
  <form method="post" action="{{action('UserProfileController@store') }}" method="POST", enctype = "multipart/form-data">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="post">
  
  <div class="form-row">
  <div class="form-group col">
    <input class="form-control" id="userprofile-firstname"  name="name" required aria-describedby="userprofilefirstname" placeholder="First Name" />
  </div>
  <div class="form-group col">
    <input class="form-control" id="userprofile-othername"  name="name" required aria-describedby="userprofileothername" placeholder="Other Name" />
  </div>  <div class="form-group col">
    <input class="form-control" id="userprofile-lastname"  name="name" required aria-describedby="userprofilelastname" placeholder="Last Name" />
  </div>


  <div class="form-row">
  <div class="form-group col">
    <input class="form-control" id="userprofile-contactno1"  name="name" required aria-describedby="contactno1" placeholder="Contact No" />
  </div>
  <div class="form-group col">
    <input class="form-control" id="userprofile-contactno2"  name="name" required aria-describedby="contactno3" placeholder="Contact No" />
  </div>  <div class="form-group col">
    <input class="form-control" id="userprofile-contactno3"  name="name" required aria-describedby="contactno3" placeholder="Contact No" />
  </div>






      <div class="form-group col">
          <div class="custom-file">
               <input type="file" class="custom-file-input" id="imgurl" name="imgurl">
              <label class="custom-file-label" for="customFile">Header Image</label>
           </div>
      </div>






  <div class="form-group">

  <button type="submit" class="btn btn-primary">Submit</button>

  </div>

</form>
   
  


</div>

<div class="col-md-3 col-lg-3 col-sm-3 pull-right">




       
        </div><!-- /.blog-sidebar -->
</div>
</div>



@endsection