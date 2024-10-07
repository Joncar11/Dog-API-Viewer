<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Dog Image</title>
</head>
<body>
    <h1>Random Dog Image</h1>
    <?php if(isset($image)): ?>
        <img src="<?php echo e($image); ?>" alt="Random Dog" style="max-width: 500px; height: auto;">
    <?php else: ?>
        <p>No image available for this breed.</p>
    <?php endif; ?>
    <br>
    <a href="<?php echo e(url('/breeds')); ?>">Back to Breeds</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Dog-API\resources\views/breed.blade.php ENDPATH**/ ?>