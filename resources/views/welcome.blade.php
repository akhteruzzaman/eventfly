<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
      @vite('resources/css/app.css')
     
     
      @sessionToken
</head>
<body>
    
    <div id="app">
        <app></app>
    </div>   



    
    @vite('resources/js/app.js')  
    @include('partials.scripts', ['_withAppBridge' => true])
</body>
</html>
