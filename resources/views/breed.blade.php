<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Dog Image</title>
</head>
<body>
    <h1>Random Dog Image</h1>
    @if(isset($image))
        <img src="{{ $image }}" alt="Random Dog" style="max-width: 500px; height: auto;">
    @else
        <p>No image available for this breed.</p>
    @endif
    <br>
    <a href="{{ url('/breeds') }}">Back to Breeds</a>
</body>
</html>
