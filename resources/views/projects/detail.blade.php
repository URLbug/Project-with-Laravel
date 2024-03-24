<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Simple Website</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header>
    <h1>Welcome to detail page</h1>
</header>

<main>
    <section>
        <h2>{{ $name }}</h2>

        <p>{{ $description  }}</p>

        <a href="{{ $link  }}">Link project</a>
    </section>
</main>

<footer>
    <p>Copyright © {{ date('Y') }} My Simple Website</p>
</footer>

</body>
</html>
