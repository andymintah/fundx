<?php $__env->startSection('content'); ?>

<h4>Donations</h4>

<a class="btn btn-sm btn-info" href = "/donation/create" >Create New Donation</a>

<hr/>

<div class="row">
<?php $__currentLoopData = $donation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="col-md-6">
    <div class="card mb-4 shadow-sm">
       <img class="thumbnail" height=200px src=<?php echo e(asset('storage/donationimages/'.$donation->imgurl)); ?> alt="<?php echo e($donation->cmpname); ?>"/>

      <div class="card-body">
      <h4 class="card-text"><?php echo e($donation->dntname); ?></h4>

        <p class="card-text"><?php echo e($donation->description); ?></p>
        <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Total</p>
              <p class="card-text"><?php echo e($donation->amount); ?></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Raised</p>
              <p class="card-text"><?php echo e($donation->raised_amount); ?></p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Balance</p>
              <p class="card-text"><?php echo e($donation->balance_amount); ?></p>
            </div>
          </div>
        </div>
        </div>
        </div>
      
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a class="btn btn-sm btn-outline-secondary" href="/donation/<?php echo e($donation->id); ?>" style="text-decoration: none">View More</a>
            <a class="btn btn-sm btn-info" href="/donationdonors/create/<?php echo e($donation->id); ?>" style="text-decoration: none">Donate</a>

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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/fundx/resources/views/donation/index.blade.php ENDPATH**/ ?>