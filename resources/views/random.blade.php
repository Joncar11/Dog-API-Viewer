<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Dog</title>
</head>
<body>
    <h1>Random Dog Image</h1>
    <img src="{{ $image }}" alt="Random Dog" style="max-width: 500px; height: auto;">
    <br>
    <a href="{{ url('/') }}">Back</a>
    <br>
    <a href="{{ url('/breeds') }}">See Breeds</a>
</body>
</html>
