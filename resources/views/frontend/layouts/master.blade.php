@include('frontend.layouts.head')
<body>

@inject('appConfig','App\Http\Controllers\Controller')
    <div id="app">
        @yield('content')
    </div>

    <script>
        window.appConfig={
            appUrl:"{{$appConfig->appUrl}}",
        }
    </script>
@include('frontend.layouts.footer')
