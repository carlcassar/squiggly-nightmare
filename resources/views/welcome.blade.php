<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>The Squiggly Nightmare</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
</head>
<body>
<div id="app" class="colours">
    <h1>The Squiggly Nightmare</h1>

    <h2>Why oh why does PHPstorm insist on showing me squiggly lines?*</h2>

    <v-please-make-this-stop></v-please-make-this-stop>

    <p>*It's as sore to my eyes as this blinking text</p>
</div>
</body>

<script src="{{ asset('js/app.js') }}"></script>
</html>
