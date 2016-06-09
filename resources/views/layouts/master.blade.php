<!DOCTYPE html>
<!-- URL::forceSchema('https') -->
{{ URL::forceSchema('http') }}

<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>@yield('titulo')</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Pesaje CodEd" name="description" />
        <meta content="Eduardo Salazar" name="author" />

        @include('includes.header_includes')
        @yield('styles')
    </head>
    
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        
        @include('includes.header')

        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            @include('includes.sideMenu')
            
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    
                    <h3 class="page-title"> Dashboard
                        <small>dashboard & statistics</small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Dashboard</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-3 col-sm-6 col-xs-12">
                            @yield('contenido')
                        </div>
                    </div>    
                    
                </div>
            </div>
        </div>
        <!-- END CONTAINER -->

         @include('includes.footer')
    </body>
</html>