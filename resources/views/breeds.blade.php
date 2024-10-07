<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dog Breeds</title>
</head>
<body>
    <h1>Dog Breeds</h1>
    <ul>
        @foreach($breeds as $breed)
            <li>
                <a href="{{ url('/breed/' . $breed['id']) }}">{{ ucfirst($breed['name']) }}</a>
            </li>
        @endforeach
    </ul>
    <br>
    <a href="{{ url('/') }}">Back</a>
</body>
</html>
