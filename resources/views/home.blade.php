@extends('layouts.master')

@section('contenido')

    <div class="row widget-row">
        <div class="col-md-3">
            <!-- BEGIN WIDGET THUMB -->
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                <h4 class="widget-thumb-heading">Ingreso del día</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-green icon-info"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-subtitle">TN</span>
                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="7,644">0</span>
                    </div>
                </div>
            </div>
            <!-- END WIDGET THUMB -->
        </div>
        <div class="col-md-3">
            <!-- BEGIN WIDGET THUMB -->
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                <h4 class="widget-thumb-heading">Ingreso de la semana</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-red icon-info"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-subtitle">TN</span>
                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="1,293">0</span>
                    </div>
                </div>
            </div>
            <!-- END WIDGET THUMB -->
        </div>
        <div class="col-md-3">
            <!-- BEGIN WIDGET THUMB -->
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                <h4 class="widget-thumb-heading">Ingreso del mes</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-purple icon-info"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-subtitle">TN</span>
                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="815">0</span>
                    </div>
                </div>
            </div>
            <!-- END WIDGET THUMB -->
        </div>
        <div class="col-md-3">
            <!-- BEGIN WIDGET THUMB -->
            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 ">
                <h4 class="widget-thumb-heading">Total de ingresos</h4>
                <div class="widget-thumb-wrap">
                    <i class="widget-thumb-icon bg-blue icon-info"></i>
                    <div class="widget-thumb-body">
                        <span class="widget-thumb-subtitle">TN</span>
                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="5,071">0</span>
                    </div>
                </div>
            </div>
            <!-- END WIDGET THUMB -->
        </div>
    </div>


    <div class="col-md-12 col-sm-12">
        <!-- BEGIN PORTLET-->
        <div class="portlet light ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-share font-red-sunglo hide"></i>
                    <span class="caption-subject font-dark bold uppercase">Ingresos</span>
                    <span class="caption-helper">estadisticas mensuales...</span>
                </div>
            </div>

            <div class="portlet-body">
                <div id="site_activities_loading">
                    <img src="{{ URL::to('img/loading.gif')  }}" alt="loading" /> </div>
                <div id="site_activities_content" class="display-none">
                    <div id="site_activities" style="height: 228px;"> </div>
                </div>
            </div>
        </div>
        <!-- END PORTLET-->
    </div>

@endsection

@section('titulo')
    Inicio
@endsection

@section('subtitulo')
    Panel y estadisticas
@endsection

@section('pagina_actual')
    Panel
@endsection