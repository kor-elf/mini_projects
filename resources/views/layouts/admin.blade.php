<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link href="{{ mix('css/admin/app.css') }}" rel="stylesheet">
    </head>
    <body class="hold-transition sidebar-mini">
        <div id="app">
            <!-- Site wrapper -->
            <div class="wrapper">
                @include('layouts.admin._header')

                <!-- Main Sidebar Container -->
                <aside class="main-sidebar sidebar-dark-primary elevation-4">
                    <a href="{{ route('admin.home') }}" class="brand-link">
                        <img src="{{ asset('images/admin/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light">Admin Panel</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                        <!-- Sidebar Menu -->
                        <nav class="mt-2">
                            @include('layouts.admin._menu')
                        </nav>
                        <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->
                </aside>

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('h1', '')</h1>
                        </div>
                        </div>
                    </div><!-- /.container-fluid -->
                    </section>

                    <!-- Main content -->
                    <section class="content">
                        <div class="ml-3 mr-3">
                            @include('layouts.admin._alerts')
                            {{ $slot }}
                        </div>
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->

                <footer class="main-footer">
                    <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                    </div>
                    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io" target="_blank">AdminLTE.io</a>.</strong> All rights reserved.
                </footer>

            </div>
            <!-- ./wrapper -->
        </div>
        <script src="{{ mix('js/admin/app.js') }}" defer></script>
    </body>
</html>
