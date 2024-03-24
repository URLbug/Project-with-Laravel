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
    <h1>Welcome to My Simple Website</h1>
</header>

<main>
    <section>
        <h2>About Me</h2>
        <p>I am a web developer with a passion for creating simple and elegant websites.</p>
    </section>

    <section>
        <h2>My Work</h2>
        <p>Here are some examples of my recent projects:</p>

        <ul>
            @foreach($projects as $project)
                <li>
                    <a href="{{ url('/' . $project->id . '/project') }}">
                        {{ $project->name }}
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
</main>

<footer>
    <p>Copyright © {{ date('Y') }} My Simple Website</p>
</footer>

</body>
</html>
