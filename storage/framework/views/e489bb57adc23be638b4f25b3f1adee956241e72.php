<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Fundx</title>

    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <!--<link href="<?php echo e(asset('css/gijgo.min.css')); ?>" rel="stylesheet">-->

</head>
<body>
    <div id="app">

        <div class="container">
        <?php echo $__env->make('partials.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


       <!-- <main class="py-4">-->
        <main class="py-4">

            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

  
</body>

</html>
<?php /**PATH /Applications/MAMP/htdocs/fundx/resources/views/layouts/dashboard.blade.php ENDPATH**/ ?>