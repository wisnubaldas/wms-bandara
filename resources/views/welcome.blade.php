<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        @jingset('css/app.css')
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        @jingset('js/app.js')
    </body>
</html>
