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
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ URL::to('plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('plugins/morris/morris.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('plugins/fullcalendar/fullcalendar.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ URL::to('css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ URL::to('css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{ URL::to('layout/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('layout/css/themes/blue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ URL::to('layout/css/custom.min.css') }} " rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ URL::to('favicon.ico') }}" /> 
        
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