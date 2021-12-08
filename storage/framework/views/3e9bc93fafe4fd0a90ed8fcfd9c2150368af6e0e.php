<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?php echo e($title); ?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(template('assets/img/unj.png')); ?>" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?php echo e(template('assets/vendor/nucleo/css/nucleo.css')); ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo e(template('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')); ?>"
        type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <!-- Page plugins -->
    <link rel="stylesheet"
        href="<?php echo e(template('assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(template('assets/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(template('assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(template('assets/vendor/animate.css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(template('assets/vendor/sweetalert2/dist/sweetalert2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(template('assets/vendor/select2/dist/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(template('assets/vendor/quill/dist/quill.core.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(template('assets/vendor/fullcalendar/dist/fullcalendar.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(template('assets/vendor/sweetalert2/dist/sweetalert2.min.css')); ?>">


    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?php echo e(template('assets/css/argon.css?v=1.1.0')); ?>" type="text/css">

    <link rel="stylesheet" href="<?php echo e(template('style.css')); ?>" type="text/css">

</head>

<body>
    <!-- Main content -->
    <div class="main-content" id="panel">
        <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- Page content -->
        <div class="container-fluid mt-7">

            <?php echo $__env->yieldContent('container'); ?>

            <!-- ======= Footer ======= -->
            <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

</body>

</html>
<?php /**PATH D:\applications\UKM-FT-v2\resources\views//layouts/main.blade.php ENDPATH**/ ?>