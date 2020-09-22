@extends('layouts.app')


@section('content')
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">


<div class="container">
<!-- Example row of columns -->
<div class="row">

  <div class="col-md-12 col-lg-12 col-sm-12">
  <form method="post" action="{{action('DonationController@store') }}" method="POST", enctype = "multipart/form-data">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="post">
  
  <div class="form-group">
    <input class="form-control" id="donation-name"  name="name" required aria-describedby="donationname" placeholder="Donation Name" />
    
  </div>


  <div class="form-group">
    <textarea class="form-control autosize-target text-left"  id="donation-description" name="description"  placeholder="Description"></textarea>
  </div>


  <div class="form-row">
 
 
  <div class="form-group col">

  <input class="form-control" id="datepicker" width="276" name="start-date" required aria-describedby="startdate" placeholder="Start Date"/>
</div>

<div class="form-group  col">

  <input class="form-control" id="datepicker1" width="276" name="end-date" required aria-describedby="enddate"  placeholder="End Date"/>
</div>

       <!-- <div class="form-group col">

            <input class="form-control" id="days"  name="days" required aria-describedby="enddate" placeholder="Days" />
         </div>-->

    </div>
    <div class="form-group">

<input class="form-control" id="items" name="items" required aria-describedby="items"  placeholder="Items"/>
</div>

<div class="form-group">

<input class="form-control" id="address" name="address" required aria-describedby="address"  placeholder="Item Delivery Address"/>
</div>
<div class="form-row">

        <div class="form-group col">
    <input class="form-control"  id="amount"  name="amount"  required aria-describedby="amount"  placeholder="Target Amount" />
        </div>

        <div class="form-group col">
          <select class="form-control " id="category" name="category" placeholder="Category">
      <option selected>Donation Category</option>

      <option>1</option>

    </select>
  </div>



      <div class="form-group col">
          <div class="custom-file">
               <input type="file" class="custom-file-input" id="imgurl" name="imgurl">
              <label class="custom-file-label" for="customFile">Header Image</label>
           </div>
      </div>

</div>




  <div class="form-group">

  <button type="submit" class="btn btn-primary">Submit</button>

  </div>

</form>
   
  


</div>

<div class="col-md-3 col-lg-3 col-sm-3 pull-right">


          <div class="p-3">
            <h4 class="font-italic">Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/donation/">My donation</a></li>

            </ol>
          </div>


       
        </div><!-- /.blog-sidebar -->
</div>
</div>



@endsection