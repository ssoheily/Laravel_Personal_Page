<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('front/styles/bootstrap.rtl.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('front/styles/style.css')); ?>">
    <title>personal website</title>
</head>

<body>
<?php echo $__env->make('front.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.skill', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.blogs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('front.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script src="<?php echo e(asset('front/js/bootstrap.js')); ?>"></script>
</body>

</html>
<?php /**PATH /home/parallels/lv-101/resources/views/front/index.blade.php ENDPATH**/ ?>