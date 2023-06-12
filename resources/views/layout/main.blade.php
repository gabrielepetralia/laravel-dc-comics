<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" href="/img/favicon.ico"/>
    <title>Laravel DC Comics | @yield("title")</title>

    @vite('resources/js/app.js')

</head>
<body>

    @include("partials.header")

    <main class="bg-dark">
        @yield("content")
    </main>

</body>
</html>
