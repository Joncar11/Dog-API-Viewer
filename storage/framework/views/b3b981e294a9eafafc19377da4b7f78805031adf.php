<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog API Viewer</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>"> <!-- Link to your CSS file if you have one -->
</head>
<body>
    <h1>Welcome to the Dog API Viewer</h1>
    <a href="<?php echo e(url('/random')); ?>">Get Random Dog</a>
    <br>
    <a href="<?php echo e(url('/breeds')); ?>">See Breeds</a>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Dog-API\resources\views/welcome.blade.php ENDPATH**/ ?>