<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{{ Session::token() }}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
    </head>

    <body>

        <header class="header">
            <div class="container">
                <div class="row">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ Request::segment(1) == '' ? 'active' : '' }}"><a href="/" >List</a></li>
                        <li class="{{ Request::segment(1) == 'add' ? 'active' : '' }}"><a href="/add" class="" >Add</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="content">
            <div class="container">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>

        </div>
        <footer class="footer" >
            <div class="container">
                <div class="row">
                    <div class="text-centerx">
                        Examinee : Jay Aries Flores
                    </div>
                </div>
            </div>
        </footer>

        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>

</html>
