<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Movie DB</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>

        <div class="wrapper">
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer" style="text-align: center;">
                <strong>Copyright &copy; 2019
                    <a href="javascript:;">University of San Jose - Recoletos Graduate School</a>
                    .
                </strong>
                All rights
                reserved.
            </footer>

        </div>
        <!-- ./wrapper -->

        <!-- Scripts -->
        <script src="{{ asset('/js/app.js') }}"></script>
        <script src="{{ asset('/js/utils.js') }}"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>