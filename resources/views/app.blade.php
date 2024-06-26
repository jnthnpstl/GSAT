<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GS Online Application</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <link href="{{mix('/css/app.css')}}" />

        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>


        <!-- Scripts -->
        <script src="{{mix('/js/app.js')}}" defer></script>

        <link href="/dist/output.css" rel="stylesheet">
        
    </head>
    <body class="font-sans antialiased">
        <div id="app">
            <App></App>
        </div>
    </body>
</html>
