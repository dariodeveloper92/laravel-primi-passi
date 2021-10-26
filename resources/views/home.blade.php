<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        
    </head>
    <body>
        <div class="content">
            <div class="title m-b-md">
                Home page
            </div>

            <div class="links">
                <!-- richiamo il link della Route -->
                <a href=" {{ route('homepage') }}">Homepage</a>
                <a href="{{ route('noi') }}">About</a>
                <a href="{{ route('contatti') }}">Contacts</a>
            </div>
        </div>
    </body>
</html>
