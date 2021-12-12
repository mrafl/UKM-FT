<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>UKM - Fakultas Teknik</title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(template('assets/img/unj.png')); ?>" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo e(template('assets/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
    <link rel="stylesheet"
          href="<?php echo e(template('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>"
          type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?php echo e(template('assets/css/argon.css?v=1.1.0')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(template('style.css')); ?>" type="text/css">

</head>

<body>
<!-- Main content -->
<div class="main-content" id="panel">
    <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('container'); ?>

    <!-- ======= Footer ======= -->
    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
</body>

</html>
<?php /**PATH D:\applications\UKM-FT-v2\resources\views//layouts/home.blade.php ENDPATH**/ ?>
