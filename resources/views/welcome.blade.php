<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link
        href="https://fonts.bunny.net/css?family=cinzel-decorative:700,900|cinzel:700,900|uncial-antiqua:400|im-fell-english:400|almendra:700|metamorphous:400|trade-winds:400|nosifer:400|eater:400|creepster:400"
        rel="stylesheet" />

    @vite('resources/css/app.css')

</head>

<body class="bg-black min-h-screen flex items-center justify-center">
    <h1 class="text-9xl font-bold bg-gradient-to-r from-violet-900 via-purple-800 to-indigo-900 text-transparent bg-clip-text uppercase tracking-wider"
        style="font-family: 'uncial-antiqua', serif;">
        ambrosia
    </h1>
</body>

</html>
