<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Xeria - Responsive Admin Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- third party css -->
        <link href="assets/libs/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- plugin css -->
        <link href="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div id="app">








        <!-- Navigation Bar-->
        <header id="topnav">

            <!-- ========================================== -->
            <!-- ========== TOP BAR START ================= -->
            <!-- ========================================== -->
            <!-- Topbar Start -->
            <div class="navbar-custom">
                @include('estructura.topbar')
            </div>
            <!-- end Topbar -->
            <!-- ========================================== -->
            <!-- ========== TOP BAR END =================== -->
            <!-- ========================================== -->






            <!-- ========================================== -->
            <!-- ========== TOP MENU START ================ -->
            <!-- ========================================== -->
            <div class="topbar-menu">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        @include('estructura.topmenu')
                        <!-- End navigation menu -->
                        <div class="clearfix"></div>
                    </div>
                    <!-- end #navigation -->
                </div>
                <!-- end container -->
            </div>
            <!-- end navbar-custom -->
            <!-- ========================================== -->
            <!-- ========== TOP MENU END ================ -->
            <!-- ========================================== -->

        </header>
        <!-- End Navigation Bar-->







        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="wrapper">
           <!-- Contenido -->
           @yield('content')
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->







        <!-- Footer Start -->
        @include('estructura.footer')
        <!-- end Footer -->

        <!-- Right Sidebar -->
        @include('estructura.rightbar')
        <!-- /Right-bar -->

    </div> <!-- End div id app template ----------------------------- -->



        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Third Party js-->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>
        <script src="assets/libs/peity/jquery.peity.min.js"></script>
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.js"></script>
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>
        <!-- third party js ends -->

        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="assets/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>

        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-1.init.js"></script>

        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-2.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>






    </body>
</html>