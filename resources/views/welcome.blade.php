<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog API Viewer</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Link to your CSS file if you have one -->
</head>
<body>
    <h1>Welcome to the Dog API Viewer</h1>
    <a href="{{ url('/random') }}">Get Random Dog</a>
    <br>
    <a href="{{ url('/breeds') }}">See Breeds</a>
</body>
</html>
