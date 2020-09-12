<?php $__env->startSection('content'); ?>
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
<div class="jumbotron">
<div class="container">
<img class="thumbnail" height=200px src=<?php echo e(asset('storage/donationimages/'.$donation->imgurl)); ?> alt="<?php echo e($donation->cmpname); ?>"/>

  <h3 class="display-6"><?php echo e($donation->dntname); ?></h3>
  <button type="button" class="btn btn-sm btn-info"><a href="/donationdonors/create/<?php echo e($donation->id); ?>" style="text-decoration: none">Donate</a></button>

</div>
</div>
<h5>Details</h5>

<p><?php echo e($donation->description); ?></p>
<hr/>
<h5>Amount to Raise</h5>
<p><?php echo e($donation->amount); ?></p>
<hr/>

<h5>Start Date</h5>
<p><?php echo e($donation->start_date); ?></p>
<hr/>

<h5>End Date</h5>
<p><?php echo e($donation->end_date); ?></p>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/fundx/resources/views/donation/show.blade.php ENDPATH**/ ?>