<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Page</title>
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png') }}" />
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>      <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}



    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @if(isset($datables) && $datables == 1)
        <link href="{{ URL::asset('css/datatables/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('css/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css">
    @endif
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @yield('content-java')
    @if(isset($datables) && $datables == 1)
        <script src="{{ URL::asset('css/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ URL::asset('css/datatables/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        <script src="{{ URL::asset('css/datatables/dataTables.buttons.min.js') }}"></script>
        <script src="{{ URL::asset('css/datatables/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ URL::asset('css/datatables/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('css/datatables/pdfmake.min.js') }}"></script>
        <script src="{{ URL::asset('css/datatables/vfs_fonts.js') }}"></script>
        <script src="{{ URL::asset('css/datatables/buttons.html5.min.js') }}"></script>
        <script src="{{ URL::asset('css/datatables/buttons.print.min.js') }}"></script>
        <script src="{{ URL::asset('css/datatables/dataTables.fixedHeader.min.js') }}"></script>
        <script src="{{ URL::asset('css/datatables/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ URL::asset('css/datatables/dataTables.scroller.min.js') }}"></script>
        <!-- Responsive examples -->
        <script src="{{ URL::asset('css/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ URL::asset('css/datatables/responsive.bootstrap4.min.js') }}"></script>
        <!-- Datatable init js -->
        <script src="{{ URL::asset('css/pages/datatables.init.js') }}"></script>
    @endif
</body>
</html>
