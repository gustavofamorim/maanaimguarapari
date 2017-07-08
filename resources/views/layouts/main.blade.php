<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
        
        @stack('fonts')
        @stack('stylesheet')
        @stack('pre-scripts')
    </head>
    
    <body>
        @yield('page-content')
        
        @stack('pos-scripts')
        @if (getenv('APP_ENV') === 'local')
            <script id="__bs_script__">
                //<![CDATA[
                    document.write("<script async src='http://HOST:8082/browser-sync/browser-sync-client.js?v=2.18.12'><\/script>".replace("HOST", location.hostname));
                //]]>
            </script>
        @endif
    </body>
</html>