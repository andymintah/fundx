<?php $__env->startSection('content'); ?>
<div class="jumbotron">
<div class="container">

<img class="thumbnail" height=200px src=<?php echo e(asset('storage/campaignimages/'.$campaign->imgurl)); ?> alt="<?php echo e($campaign->cmpname); ?>"/>

  <h1 class="display-3"><?php echo e($campaign->cmpname); ?></h1>
  <a class="btn btn-sm btn-info" href="/donors/create/<?php echo e($campaign->id); ?>">Donate</a>

</div>
</div>
<div class="row">
<div class="col-md-9 col-lg-9 col-sm-9 pull-left">

<h5>Details</h5>

<p><?php echo e($campaign->description); ?></p>
<hr/>
<h5>Amount to Raise</h5>
<p><?php echo e($campaign->amount); ?></p>
<hr/>

<h5>Start Date</h5>
<p><?php echo e($campaign->start_date); ?></p>
<hr/>

<h5>End Date</h5>
<p><?php echo e($campaign->end_date); ?></p>
<hr/>


</div>
<div class="col-md-3 col-lg-3 col-sm-3 pull-right">

</div>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/fundx/resources/views/campaign/show.blade.php ENDPATH**/ ?>