<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>CodEd -- Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ URL::to('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('plugins/select2/css/select2-bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ URL::to('css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ URL::to('css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ URL::to('pages/css/login-5.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link rel="{{ URL::to('shortcut icon') }}" href="favicon.ico" /> </head>
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN : LOGIN PAGE 5-2 -->
<div class="user-login-5">
    <div class="row bs-reset">
        <div class="col-md-6 login-container bs-reset">
            <img class="login-logo login-6" src="{{ URL::to('layout/img/logo-CodEd.png') }}" width="200" height="50" />
            <div class="login-content">
                <h1>Admin Login</h1>
                <p> Lorem ipsum dolor sit amet, coectetuer adipiscing elit sed diam nonummy et nibh euismod aliquam erat volutpat. Lorem ipsum dolor sit amet, coectetuer adipiscing. </p>

                <!-- LOGIN FORM-->
                <form action="{{ route('login') }}" class="login-form" method="post">
                    {{ csrf_field() }}
 
                    <div class="row">
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="text" autocomplete="off" placeholder="Username" name="username" /> </div>
                        <div class="col-xs-6">
                            <input class="form-control form-control-solid placeholder-no-fix form-group" type="password" autocomplete="off" placeholder="Password" name="password" /> </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="rememberme mt-checkbox mt-checkbox-outline">
                                <input type="checkbox" name="remember" value="1" /> Recordarme
                                <span></span>
                            </label>
                        </div>
                        <div class="col-sm-8 text-right">
                            <div class="forgot-password">
                                <a href="javascript:;" id="forget-password" class="forget-password">¿Olvidó su contraseña?</a>
                            </div>
                            <button class="btn blue" type="submit">Ingresar</button>
                        </div>
                    </div>
                </form>


                <!-- BEGIN FORGOT PASSWORD FORM -->
                <form class="forget-form" action="javascript:;" method="post">
                    <h3>¿ Olvidó su contraseña ?</h3>
                    <p> Ingrese su e-mail para resetear su clave. </p>
                    <div class="form-group">
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
                    <div class="form-actions">
                        <button type="button" id="back-btn" class="btn blue btn-outline">Regresar</button>
                        <button type="submit" class="btn blue uppercase pull-right">Aceptar</button>
                    </div>
                </form>
                <!-- END FORGOT PASSWORD FORM -->
            </div>
            <div class="login-footer">
                <div class="row bs-reset">
                    <div class="col-xs-5 bs-reset">
                        <ul class="login-social">
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;">
                                    <i class="icon-social-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-7 bs-reset">
                        <div class="login-copyright text-right">
                            <p>Copyright &copy; CodEd 2016</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 bs-reset">
            <div class="login-bg"> </div>
        </div>
    </div>
</div>
<!-- END : LOGIN PAGE 5-2 -->
<!--[if lt IE 9]>
<script src="{{ URL::to('plugins/respond.min.js') }}"></script>
<script src="{{ URL::to('plugins/excanvas.min.js') }}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ URL::to('plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('plugins/js.cookie.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ URL::to('plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('plugins/jquery-validation/js/additional-methods.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('plugins/backstretch/jquery.backstretch.min.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ URL::to('scripts/app.min.js') }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ URL::to('pages/scripts/login-5.js') }}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>