<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/$theme/images/favicon.png")}}">
        <!-- Pignose Calender -->
        <link href="{{asset("assets/$theme/plugins/pg-calendar/css/pignose.calendar.min.css")}}" rel="stylesheet">
        <!-- Chartist -->
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/chartist/css/chartist.min.css")}}">
        <link rel="stylesheet" href="{{asset("assets/$theme/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css")}}">
        <!-- Custom Stylesheet -->
        <link href="{{asset("assets/$theme/css/style.css")}}" rel="stylesheet">

    </head>

    <body>

        <!--*******************
            Preloader start
        ********************-->
        <div id="preloader">
            <div class="loader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
                </svg>
            </div>
        </div>
        <!--*******************
            Preloader end
        ********************-->
    
        
        <!--**********************************
            Main wrapper start
        ***********************************-->
        <div id="main-wrapper">
    
            <!--**********************************
                Nav header start
            ***********************************-->
            <div class="nav-header">
                <div class="brand-logo">
                    <a href="index.html">
                        <b class="logo-abbr"><img src="{{asset("assets/$theme/images/logo.png")}}" alt=""> </b>
                        <span class="logo-compact"><img src="{{asset("assets/$theme/images/logo-compact.png")}}" alt=""></span>
                        <span class="brand-title">
                            <img src="{{asset("assets/$theme/images/logo-text.png")}}" alt="">
                        </span>
                    </a>
                </div>
            </div>
            <!--**********************************
                Nav header end
            ***********************************-->

            <!--**********************************
                Header start
            ***********************************-->
            @include("theme/$theme/header")
            <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

            <!--**********************************
                Sidebar start
            ***********************************-->
            @include("theme/$theme/sidebar")
            <!--**********************************
                Sidebar end
            ***********************************-->


            <!--**********************************
                Content body start
            ***********************************-->
            @include("theme/$theme/body")
            <!--**********************************
                Content body end
            ***********************************-->

            <!--**********************************
                Footer start
            ***********************************-->
            @include("theme/$theme/footer")
            <!--**********************************
                Footer end
            ***********************************-->
        </div>
        <!--**********************************
            Main wrapper end
        ***********************************-->
        
        <!--**********************************
            Scripts
        ***********************************-->

        <script src="{{asset("assets/$theme/plugins/common/common.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/custom.min.js")}}"></script>
        <script src="{{asset("assets/$theme/js/settings.js")}}"></script>
        <script src="{{asset("assets/$theme/js/gleek.js")}}"></script>
        <script src="{{asset("assets/$theme/js/styleSwitcher.js")}}"></script>

        <!-- Chartjs -->
        <script src="{{asset("assets/$theme/plugins/chart.js/Chart.bundle.min.js")}}"></script>
        <!-- Circle progress -->
        <script src="{{asset("assets/$theme/plugins/circle-progress/circle-progress.min.js")}}"></script>
        <!-- Datamap -->
        <script src="{{asset("assets/$theme/plugins/d3v3/index.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/topojson/topojson.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/datamaps/datamaps.world.min.js")}}"></script>
        <!-- Morrisjs -->
        <script src="{{asset("assets/$theme/plugins/raphael/raphael.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/morris/morris.min.js")}}"></script>
        <!-- Pignose Calender -->
        <script src="{{asset("assets/$theme/plugins/moment/moment.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/pg-calendar/js/pignose.calendar.min.js")}}"></script>
        <!-- ChartistJS -->
        <script src="{{asset("assets/$theme/plugins/chartist/js/chartist.min.js")}}"></script>
        <script src="{{asset("assets/$theme/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js")}}"></script>



        <script src="{{asset("assets/$theme/js/dashboard/dashboard-1.js")}}"></script>

    </body>
</html>