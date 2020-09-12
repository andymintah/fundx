<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">


<div class="container">
<!-- Example row of columns -->
<div class="row">

  <div class="col-md-12 col-lg-12 col-sm-12">
  <form method="post" action="<?php echo e(route('donationdonors.store')); ?>" method="POST">
  <?php echo e(csrf_field()); ?>

  <input type="hidden" name="_method" value="post">
  
  <div class="form-group">
    <input class="form-control" id="firstname"  name="firstname" required aria-describedby="firstname" placeholder="First Name" />
    <input type="hidden" name="donation_id" value="<?php echo e($donation_id); ?>">

  </div>

  <div class="form-group">
    <input class="form-control" id="lastname"  name="lastname" required aria-describedby="lastname" placeholder="Last Name" />
    
  </div> <div class="form-group">
    <input class="form-control" id="amount"  name="amount" required aria-describedby="Amount" placeholder="Amount" />
    
  </div>
  </div> <div class="form-group">
    <input class="form-control" id="phoneno"  name="phoneno" required aria-describedby="Phoneno" placeholder="Phone No." />
    
  </div>
  </div> <div class="form-group">
    <input class="form-control" id="email"  name="email" required aria-describedby="email" placeholder="Email" />
    
  </div>










  <div class="form-group">

  <button type="submit" class="btn btn-primary">Donate</button>

  </div>

</form>
   
  


</div>

<div class="col-md-3 col-lg-3 col-sm-3 pull-right">
     
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/fundx/resources/views/donationdonors/create.blade.php ENDPATH**/ ?>