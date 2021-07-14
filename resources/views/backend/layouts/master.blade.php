@include('backend.layouts.head')
<body>

@inject('appConfig','App\Http\Controllers\Controller')
    <div id="app">
        @include('backend.layouts.navbar')
        @include('backend.layouts.sidebar')
        <main >
            @yield('content')
        </main>
    </div>

    <script>
        window.appConfig={
            appUrl:"{{$appConfig->appUrl}}",
        }
    </script>
@include('backend.layouts.footer')
