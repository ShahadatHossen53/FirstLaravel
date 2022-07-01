<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body class="antialiased">
        <h1>This is home page</h1>
        <ul>
            <li><a href="{{ route('about.us')}}">About</a></li>
            <li><a href="{{ route('contact.us')}}">Contact</a></li>
            <li><a href="{{ route('mydata.us')}}">Show Data</a></li>
            <li><a href="{{ route('myform.us')}}">Form</a></li>
        </ul>
    </body>
</html>
