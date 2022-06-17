<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>jagabadi</title>
         <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>

        </style>
    
    </head>
    <body class="antialiased">
        <div id="app">
            <navbar></navbar>
            <post-property/></post-property>
        </div>  
        
        
     
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
