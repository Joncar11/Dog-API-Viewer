<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Breeds</title>
</head>
<body>
    <h1>Dog Breeds</h1>
    <ul>
        <?php $__currentLoopData = $breeds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $breed): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(url('/breed/' . $breed['id'])); ?>"><?php echo e(ucfirst($breed['name'])); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <br>
    <a href="<?php echo e(url('/')); ?>">Back</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Dog-API\resources\views/breeds.blade.php ENDPATH**/ ?>