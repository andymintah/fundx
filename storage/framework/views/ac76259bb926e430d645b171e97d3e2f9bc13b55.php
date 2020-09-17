<?php echo $__env->make('profile.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>

 <?php $__currentLoopData = $donation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <div class="row">

 <div class="col-md-10">
 <h4><?php echo e($donation->dntname); ?></h4>
 <p class="lead"><?php echo e($donation->description); ?></p>
 <a class="btn btn-lg btn-primary" href="/donation/<?php echo e($donation->id); ?>/edit" role="button">Edit</a>
 <a class="btn btn-lg btn-primary" href="/donation/<?php echo e($donation->id); ?>" role="button">Delete</a>
 <a class="btn btn-lg btn-primary" href="/donation/mshow/<?php echo e($donation->id); ?>" role="button">View More</a>

</div>
</div>

 
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>









 




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/fundx/resources/views/donation/mindex.blade.php ENDPATH**/ ?>