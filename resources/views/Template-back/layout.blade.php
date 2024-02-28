<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

    <!-- Title -->
    <title>@yield('title','Index')</title>

    <!-- Favicon -->
    <link href="{{ asset('') }}back/img/brand/favicon.png" rel="icon" type="image/x-icon" />

    <!-- Bootstrap css -->
	<link href="{{ asset('') }}back/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" id="style"/>

    <!-- Style css -->
    <link href="{{ asset('') }}back/css/style.css" rel="stylesheet">
    <link href="{{ asset('') }}back/css/plugins.css" rel="stylesheet">

    <!-- Icons css -->
    <link href="{{ asset('') }}back/css/icons.css" rel="stylesheet">

    <!-- Animations css -->
    <link href="{{ asset('') }}back/css/animate.css" rel="stylesheet">

	@stack('costum-css')
	<!-- DataTables -->
    <link href="{{ asset('') }}plugin/datatables/css.css" rel="stylesheet" type="text/css" />

	<!-- datepicker -->
	<link href="{{ asset('') }}plugin/bootstrap-datepicker/css/bootstrap-datepicker3.css" rel="stylesheet" />
	<link href="{{ asset('') }}plugin/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />

    <!-- JQuery min js -->
	<script src="{{ asset('') }}plugin/jquery-3.6.0.js"></script>
	<script src="{{ asset('') }}back/plugins/jquery/jquery.min.js"></script>

	<!-- DataTables  -->
    <script type="text/javascript" src="{{ asset('') }}plugin/datatables/pdf.js"></script>
    <script type="text/javascript" src="{{ asset('') }}plugin/datatables/font.js"></script>
    <script type="text/javascript" src="{{ asset('') }}plugin/datatables/datatables.js"></script>
    <script type="text/javascript" src="{{ asset('') }}plugin/datatables/js/dataTables.checkboxes.min.js"></script>

	<!-- select2 -->
	<script src="{{ asset('') }}plugin/select2/select2.full.min.js"></script>

	<!-- datepicker -->
	<script src="{{ asset('') }}plugin/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="{{ asset('') }}plugin/bootstrap-daterangepicker/daterangepicker.js"></script>

	<!-- Highchart -->
	<script src="{{ asset('') }}plugin/Highcharts-11.3.0/code/highcharts.js"></script>
	<script src="{{ asset('') }}plugin/Highcharts-11.3.0/code/modules/series-label.js"></script>
	<script src="{{ asset('') }}plugin/Highcharts-11.3.0/code/modules/exporting.js"></script>
	<script src="{{ asset('') }}plugin/Highcharts-11.3.0/code/modules/offline-exporting.js"></script>
	<script src="{{ asset('') }}plugin/Highcharts-11.3.0/code/modules/export-data.js"></script>

    <!-- Switcher css -->
	<link href="{{ asset('') }}back/switcher/css/switcher.css" rel="stylesheet" />
	<link href="{{ asset('') }}back/switcher/demo.css" rel="stylesheet" />

</head>

<body class="main-body app sidebar-mini ltr">

    <!-- Switcher -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft switcher-nav">
                            <h4>Navigation Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Vertical Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch34" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch34" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizantal Click Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch35" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch35" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizantal Hover Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch15" id="myonoffswitch111" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch111" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Theme</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Theme</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Theme Primary Color</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Primary Color</span>
                                        <div class="">
                                            <input class=" input-color-picker color-primary-light"
                                                value="#4454c3" id="colorID" oninput="changePrimaryColor()" type="color"
                                                data-id="bg-color" data-id1="bg-hover" data-id2="bg-border" name="lightPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Background Color</span>
                                        <div class="">
                                            <input class="w-30p h-30 input-bg-picker background-primary-light"
                                                value="#1c203c" id="bgID" oninput="changeBackgroundColor()"
                                                type="color" data-id3="body" data-id4="theme" name="BackgroundPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft horizontal-styles">
                            <h4>Leftmenu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Default Horizontal</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch03" class="onoffswitch2-checkbox"  checked>
                                            <label for="myonoffswitch03" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Centerlogo</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch04" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch04" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft leftmenu-styles">
                            <h4>Leftmenu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox"  checked>
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Color Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Gradient Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch2" id="myonoffswitch25" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch25" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft header-styles">
                            <h4>Header Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox"  checked>
                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Color Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Gradient Header</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch3" id="myonoffswitch26" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch26" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Width Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Full Width</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Boxed</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft switcher-layout">
                            <h4>Layout Positions</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Fixed</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Scrollable</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft vertical-switcher">
                            <h4>Sidemenu layout Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Default Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Closed Menu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
                                            <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon with Text</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon Overlay</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch32" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch32" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu style 1</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch6" id="myonoffswitch33" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch33" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Reset All Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section my-4">
                                    <button class="btn btn-danger btn-block"
                                        onclick="localStorage.clear();
                                        document.querySelector('html').style = '';
                                        names() ;
                                        resetData()"
                                        type="button">Reset All
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->


    <!-- Loader -->
    <div id="global-loader"><img src="{{ asset('') }}back/img/loaders/loader-4.svg" class="loader-img" alt="Loader"></div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page custom-index">

         <!-- main-header -->
         @include('Template-back.navheader')
         <!-- /main-header -->

         <!-- main-sidebar -->
         @include('Template-back.sidebar')
         <!-- /main-sidebar -->

        <!-- main-content -->
		<div class="main-content app-content">

            <!-- container -->
            <div class="main-container container-fluid">

                <!-- row -->
				<div class="row" id="content">@yield('content')</div>
                <!-- /row -->

            </div>
            <!-- /container -->

        </div>
        <!-- /main-content -->

        <!-- Footer opened -->
		<div class="main-footer ht-45"><div class="container-fluid pd-t-0-f ht-100p"><span> Copyright © 2022 <a href="javascript:void(0);" class="text-primary">Azira</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a> All rights reserved.</span></div></div>
		<!-- /Footer closed -->

    </div>
    <!-- page closed -->

    <!--- Back-to-top --->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!--- Bootstrap Bundle js --->
    <script src="{{ asset('') }}back/plugins/bootstrap/popper.min.js"></script>
    <script src="{{ asset('') }}back/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--- Ionicons js --->
    <script src="{{ asset('') }}back/plugins/ionicons/ionicons.js"></script>

    <!--- Chart bundle min js --->
    <script src="{{ asset('') }}back/plugins/chart.js/Chart.bundle.min.js"></script>

    <!--- JQuery sparkline js --->
    <script src="{{ asset('') }}back/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!--- Eva-icons js --->
    <script src="{{ asset('') }}back/js/eva-icons.min.js"></script>

    <!--- Moment js --->
    <script src="{{ asset('') }}back/plugins/moment/moment.js"></script>

    <!--- Perfect-scrollbar js --->
    <script src="{{ asset('') }}back/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('') }}back/plugins/perfect-scrollbar/p-scroll.js"></script>

    <!--- Sidebar js --->
    <script src="{{ asset('') }}back/plugins/side-menu/sidemenu.js"></script>

    <!--- sticky js --->
    <script src="{{ asset('') }}back/js/sticky.js"></script>

    <!-- right-sidebar js -->
    <script src="{{ asset('') }}back/plugins/sidebar/sidebar.js"></script>
    <script src="{{ asset('') }}back/plugins/sidebar/sidebar-custom.js"></script>

    <!-- Morris js -->
    <script src="{{ asset('') }}back/plugins/raphael/raphael.min.js"></script>
    <script src="{{ asset('') }}back/plugins/morris.js/morris.min.js"></script>

	<!--- Internal Sweet-Alert js --->
	<script src="{{ asset('') }}back/plugins/sweet-alert/sweetalert.min.js"></script>
	<script src="{{ asset('') }}back/plugins/sweet-alert/jquery.sweet-alert.js"></script>

    <!--- Scripts js --->
    <script src="{{ asset('') }}back/js/script.js"></script>

    <!--- Index js --->
    <script src="{{ asset('') }}back/js/index.js"></script>

    <!--themecolor js-->
    <script src="{{ asset('') }}back/js/themecolor.js"></script>

    <!--swither-styles js-->
    <script src="{{ asset('') }}back/js/swither-styles.js"></script>

    <!--- Custom js --->
    <script src="{{ asset('') }}back/js/custom.js"></script>

    <!--- P-scroll js --->
    <script src="{{ asset('back/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('back/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!--- Switcher js --->
    <script src="{{ asset('back/switcher/js/switcher.js') }}"></script>

    @stack('costum-script')

</body>
</html>
