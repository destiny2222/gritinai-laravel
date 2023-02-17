<!doctype html>
<html lang="en">


<head>

        <meta charset="utf-8" />
        <title>@yield('title', '') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="/dashboard/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/dashboard/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.0.96/css/materialdesignicons.css">

    </head>

    
    <body>

    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('layouts.header-a')
            
            <!-- ========== Left Sidebar Start ========== -->
              @include('layouts.leftsidebar')
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                @yield('content')
                <!-- End Page-content -->


                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Minible.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesbrand.com/" target="_blank" class="text-reset">Themesbrand</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <!-- Right Sidebar -->
          @include('layouts.right')
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="/dashboard/assets/libs/jquery/jquery.min.js"></script>
        <script src="/dashboard/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/dashboard/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="/dashboard/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="/dashboard/assets/libs/node-waves/waves.min.js"></script>
        <script src="/dashboard/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="/dashboard/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

        <!-- apexcharts -->
        <script src="/dashboard/assets/libs/apexcharts/apexcharts.min.js"></script>

        <script src="/dashboard/assets/js/pages/dashboard.init.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
        <script>
            ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
            console.error( error );
            } );
          </script> 
        <!-- App js -->
        <script src="/dashboard/assets/js/app.js"></script>
       {{-- @include('partial.message') --}}
       @include('sweetalert::alert')

    </body>

</html>