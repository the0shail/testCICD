<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <div class="row mb-3">
        <nav class="nav">
            <a class="nav-link active" aria-current="page" href="{{ route('post.index') }}">Index</a>
            <a class="nav-link" href="{{ route('post.create') }}">Create</a>
        </nav>
    </div>
    @yield('content')
</div>


</body>
</html>
