@include('frontend.layouts.head')
<body>

@inject('appConfig','App\Http\Controllers\Controller')
    <div id="app">
        @include('backend.layouts.navbar')
        @include('backend.layouts.sidebar')
        <main id="app">
            @yield('content')
        </main>
    </div>

    <script>
        window.appConfig={
            appUrl:"{{$appConfig->appUrl}}",
        }
    </script>
@include('frontend.layouts.footer')
