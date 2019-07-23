<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="" id="app" >

        {{-- Bulma Layout --}}

        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('/') }}">
                    <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
                </a>

                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                </a>
            </div>

            <div id="navbarBasicExample" class="navbar-menu">
                <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>

                <a class="navbar-item">
                    Documentation
                </a>


                </div>

                        @guest
                            <div class="navbar-end">
                                <div class="navbar-item">
                                    @if (Route::has('register'))

                                        <div class="buttons">
                                        <a class="button is-primary" href="{{ route('register') }}">{{ __('Register') }}
                                            {{-- <strong>Sign up</strong> --}}
                                        </a>

                                    @endif
                                        <a class="button is-light" href="{{ route('login') }}">{{ __('Login') }}
                                            {{-- Log in --}}
                                        </a>

                        @else

                            <div >

                            </div>
                            <div class="navbar-item has-dropdown is-hoverable">

                                <a class="navbar-link">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="navbar-dropdown">

                                    <a class="navbar-item">
                                        Profile
                                    </a>
                                    <a class="navbar-item">
                                        Settings
                                    </a>

                                    <hr class="navbar-divider">

                                    <a class="navbar-item">
                                        Report an issue
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>

                            </div>

                        @endguest



                            </div>
                        </div>
                    </div>


            </div>
        </nav>

        <main class="container">
            @yield('content')
        </main>

    </div>
</body>
</html>
