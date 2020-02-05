<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SGT</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <!-- Global stylesheets -->

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet"
        type="text/css">
    <link href="../resources/js/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="../resources/js/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../resources/js/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="../resources/js/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="../resources/js/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="../resources/js/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="../resources/js/global_assets/js/main/jquery.min.js"></script>
    <script src="../resources/js/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="../resources/js/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->
    <!-- Theme JS files -->
    <script src="../resources/js/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
    <script src="../resources/js/global_assets/js/plugins/ui/moment/moment.min.js"></script>
    <script src="../resources/js/global_assets/js/plugins/pickers/daterangepicker.js"></script>
    <script src="../resources/js/global_assets/js/plugins/pickers/anytime.min.js"></script>
    <script src="../resources/js/global_assets/js/plugins/pickers/pickadate/picker.js"></script>
    <script src="../resources/js/global_assets/js/plugins/pickers/pickadate/picker.date.js"></script>
    <script src="../resources/js/global_assets/js/plugins/pickers/pickadate/picker.time.js"></script>
    <script src="../resources/js/global_assets/js/plugins/pickers/pickadate/legacy.js"></script>
    <script src="../resources/js/global_assets/js/plugins/notifications/jgrowl.min.js"></script>
    <script src="../resources/js/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js"></script>
    <script src="../resources/js/global_assets/js/plugins/forms/selects/select2.min.js"></script>
    <script src="../resources/js/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="../resources/js/global_assets/js/plugins/loaders/progressbar.min.js"></script>

    <script src="../resources/js/assets/js/app.js"></script>
    <script src="../resources/js/global_assets/js/demo_pages/components_progress.js"></script>
    <script src="../resources/js/global_assets/js/demo_pages/form_inputs.js"></script>
    <script src="../resources/js/global_assets/js/demo_pages/picker_date.js"></script>
    <script src="../resources/js/global_assets/js/demo_pages/form_select2.js"></script>
    <script src="../resources/js/global_assets/js/demo_pages/datatables_basic.js"></script> 
    <script src="../resources/js/global_assets/js/demo_pages/datatables_data_sources.js"></script>   
    <script src="../resources/js/global_assets/js/main/utils.js?v=<?php echo time();?>"></script>
    <!-- /theme JS files -->
</head>

<body>
    <!-- Main navbar -->
    <div class="navbar navbar-expand-md navbar-dark">
        <div class="navbar-brand">
            <a href="index.html" class="d-inline-block">
                <!-- <img src="../../../../global_assets/images/logo_light.png" alt=""> -->
            </a>
        </div>

        <div class="d-md-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
                <i class="icon-tree5"></i>
            </button>
            <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
                <i class="icon-paragraph-justify3"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbar-mobile">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                        <i class="icon-paragraph-justify3"></i>
                    </a>
                </li>
            </ul>

            <span class="navbar-text ml-md-3 mr-md-auto">
                <!-- <span class="badge bg-success">Online</span> -->
            </span>

            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-right dropdown-content wmin-md-350">
                        <div class="dropdown-content-body dropdown-scrollable">
                        </div>
                        <div class="dropdown-content-footer justify-content-center p-0">
                            <a href="#" class="bg-light text-grey w-100 py-2" data-popup="tooltip" title="Load more"><i
                                    class="icon-menu7 d-block top-0"></i></a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-user">
                    <a href="#" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="../../../../global_assets/images/placeholders/placeholder.jpg" class="rounded-circle"
                            alt="">
                        <span>Eduardo</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Cerrar Sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->

    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

            <!-- Sidebar mobile toggler -->
            <div class="sidebar-mobile-toggler text-center">
                <a href="#" class="sidebar-mobile-main-toggle">
                    <i class="icon-arrow-left8"></i>
                </a>
                Menú
                <a href="#" class="sidebar-mobile-expand">
                    <i class="icon-screen-full"></i>
                    <i class="icon-screen-normal"></i>
                </a>
            </div>
            <!-- /sidebar mobile toggler -->


            <!-- Sidebar content -->
            <div class="sidebar-content">

                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3">
                                <a href="#"><img src="../../../../global_assets/images/placeholders/placeholder.jpg"
                                        width="38" height="38" class="rounded-circle" alt=""></a>
                            </div>

                            <div class="media-body">
                                <div class="media-title font-weight-semibold">Eduardo</div>
                                <div class="font-size-xs opacity-50">
                                    <i class="icon-pin font-size-sm"></i> &nbsp;Trujillo, Perú
                                </div>
                            </div>

                            <div class="ml-3 align-self-center">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->


                <!-- Main navigation -->
                <div class="card card-sidebar-mobile">
                    <ul class="nav nav-sidebar" data-nav-type="accordion">
                        <!-- Main -->
                        <li class="nav-item-header">
                            <div class="text-uppercase font-size-xs line-height-xs">Menú</div> <i class="icon-menu"
                                title="Main"></i>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('/')}}" class="nav-link">
                                <i class="icon-home4"></i>
                                <span>
                                    Inicio                                    
                                </span>
                            </a>
                        </li>
                        @foreach ($opcion as $item)
                        @if (empty($item->padre_id))
                        <li class="nav-item nav-item-submenu">
                            <a href="#" class="nav-link"><i class="{{$item->icono}}"></i>
                                <span>{{$item->descripcion}}</span></a>
                            <ul class="nav nav-group-sub" data-submenu-title="Themes">
                                @foreach ($opcion as $hijo)
                                @if ($hijo->padre_id == $item->id)
                            <li class="nav-item"><a href="{{route($hijo->route)}}"
                                        class="nav-link">{{$hijo->descripcion}}</a></li>

                                @endif
                                @endforeach
                            </ul>
                        </li>
                        @endif
                        @endforeach
                        <!-- /main -->

                    </ul>
                </div>
                <!-- /main navigation -->

            </div>
            <!-- /sidebar content -->

        </div>
        <!-- /main sidebar -->
        <!-- Main content -->
        <div class="content-wrapper">
            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        @yield('cabecera')
                        {{-- <h4><span class="font-weight-semibold">Tickets</span> - Registro de tickets</h4> --}}
                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                        <a href="{{route('/')}}" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Inicio</a>
                            @yield('sub-cabecera')
                            {{-- <a href="form_inputs.html" class="breadcrumb-item">Tickets</a>
                            <span class="breadcrumb-item active">Registro de tickets</span> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page header -->
            <!-- Content area -->
            <div class="content">
                <!-- nuestro contenido -->
                @yield('seccion');
            </div>
            <!-- Footer -->
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="text-center d-lg-none w-100">
                    <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse"
                        data-target="#navbar-footer">
                        <i class="icon-unfold mr-2"></i>
                        Footer
                    </button>
                </div>

                <div class="navbar-collapse collapse" id="navbar-footer">
                    <span class="navbar-text">
                        &copy; 2010 - 2020. <a href="#">Empresa de transportes Virgen de la Puerta</a>
                    </span>
                </div>
            </div>
            <!-- /footer -->
        </div>
    </div>

    <!-- Main content -->
</body>

</html>