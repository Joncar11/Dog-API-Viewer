<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Dog</title>
</head>
<body>
    <h1>Random Dog Image</h1>
    <img src="<?php echo e($image); ?>" alt="Random Dog" style="max-width: 500px; height: auto;">
    <br>
    <a href="<?php echo e(url('/')); ?>">Back</a>
    <br>
    <a href="<?php echo e(url('/breeds')); ?>">See Breeds</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Dog-API\resources\views/random.blade.php ENDPATH**/ ?>