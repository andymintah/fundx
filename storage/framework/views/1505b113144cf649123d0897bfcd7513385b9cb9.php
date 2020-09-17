<?php $__env->startSection('content'); ?>

<h4>Campaigns</h4>

<a class="btn btn-sm btn-primary pull-right"  href = "/campaign/create" style="text-decoration: none">Create New Campaign</a>

<hr/>

<div class="row">
<?php $__currentLoopData = $campaign; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="col-md-6">
    <div class="card mb-4 shadow-sm">
       <img class="thumbnail" height=200px src=<?php echo e(asset('storage/campaignimages/'.$campaign->imgurl)); ?> alt="<?php echo e($campaign->cmpname); ?>"/>

      <div class="card-body">
      <h4 class="card-text"><?php echo e($campaign->cmpname); ?></h4>

        <p class="card-text"><?php echo e($campaign->description); ?></p>



  <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Total</p>
        <p class="card-text"><?php echo e($campaign->amount); ?></p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Raised</p>
        <p class="card-text"><?php echo e($campaign->raised_amount); ?></p>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <p class="card-title">Balance</p>
        <p class="card-text"><?php echo e($campaign->target_balance); ?></p>
      </div>
    </div>
  </div>


</div>



<br/>


        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a class="btn btn-sm btn-outline-secondary" href="/campaign/<?php echo e($campaign->id); ?>">View More</a>
            <a class="btn btn-sm btn-info" href="/donors/create/<?php echo e($campaign->id); ?>" >Donate</a>

          </div>
        </div>

      </div>


        </div>
      </div>


 


  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  </div>




<!-- Modal -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/fundx/resources/views/campaign/index.blade.php ENDPATH**/ ?>