<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Robotics Admin Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="icon" href="{{ $web_source }}/assets/img/logo.png" type="image/gif" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ $admin_source }}/assets/plugins/morris/morris.css">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

        <!-- Plugins css -->
        <link href="{{ $admin_source }}/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="{{ $admin_source }}/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="{{ $admin_source }}/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css" integrity="sha512-6S2HWzVFxruDlZxI3sXOZZ4/eJ8AcxkQH1+JjSe/ONCEqR9L4Ysq5JdT5ipqtzU7WHalNwzwBv+iE51gNHJNqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- DataTables -->
        <link href="{{ $admin_source }}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ $admin_source }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ $admin_source }}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="{{ $admin_source }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{ $admin_source }}/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="{{ $admin_source }}/assets/css/style.css" rel="stylesheet" type="text/css">
        @toastr_css

    </head>
    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <div class="left-side-logo d-block d-lg-none">
                    <div class="text-center">
                        <a href="{{ url('/')}}" class="logo"><img src="{{ $web_source }}/assets/img/airol_3.png" height="20" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="{{ url('/admin/dashboard') }}" class="waves-effect">
                                    <i class="dripicons-meter"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="#;" class="waves-effect"><i class="dripicons-blog"></i> <span> Blog Categories </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('blog.categories.create') }}">New Category</a></li>
                                    <li><a href="{{ route('blog.categories.index') }}">All Categories</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#;" class="waves-effect"><i class="dripicons-blog"></i> <span> Blog </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('blog.posts.create') }}">New Post</a></li>
                                    <li><a href="{{ route('blog.posts.index') }}">All Posts</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#;" class="waves-effect"><i class="dripicons-blog"></i> <span> Events </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('event.posts.create') }}">New Post</a></li>
                                    <li><a href="{{ route('event.posts.index') }}">All Posts</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#;" class="waves-effect"><i class="dripicons-photo-group"></i> <span> Gallery </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('gallery.posts.create') }}">New Image</a></li>
                                    <li><a href="{{ route('gallery.posts.index') }}">All Images</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <div class="topbar-left	d-none d-lg-block">
                            <div class="text-center">

                                <a href="#" class="logo"><img src="{{ $web_source }}/assets/img/airol_3.png" height="50px" alt="logo"></a>
                            </div>
                        </div>

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="{{ $admin_source }}/assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                        <b style="color: black">{{Auth::user()->name}} </b>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                        <a class="dropdown-item d-none" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="row">
                            <div class="col-sm-12">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                        </button>
                                        <span>{{$error }}</span>
                                @endforeach
                            </div>
                        </div>

                        @yield('content')

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2021 All Rights Reserved. <b>Robotics Lab</b> 
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js" integrity="sha512-lbwH47l/tPXJYG9AcFNoJaTMhGvYWhVM9YI43CT+uteTRRaiLCui8snIgyAN8XWgNjNhCqlAUdzZptso6OCoFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.js.map"></script>
        <script src="{{ $admin_source }}/assets/js/jquery.min.js"></script>
        <script src="{{ $admin_source }}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ $admin_source }}/assets/js/modernizr.min.js"></script>
        <script src="{{ $admin_source }}/assets/js/detect.js"></script>
        <script src="{{ $admin_source }}/assets/js/fastclick.js"></script>
        <script src="{{ $admin_source }}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{ $admin_source }}/assets/js/jquery.blockUI.js"></script>
        <script src="{{ $admin_source }}/assets/js/waves.js"></script>
        <script src="{{ $admin_source }}/assets/js/jquery.nicescroll.js"></script>
        <script src="{{ $admin_source }}/assets/js/jquery.scrollTo.min.js"></script>

        <!-- skycons -->
        <script src="{{ $admin_source }}/assets/plugins/skycons/skycons.min.js"></script>

        <!-- skycons -->
        <script src="{{ $admin_source }}/assets/plugins/peity/jquery.peity.min.js"></script>

        <!--Morris Chart-->
        <script src="{{ $admin_source }}/assets/plugins/morris/morris.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/raphael/raphael-min.js"></script>

        <!-- dashboard -->
        <script src="{{ $admin_source }}/assets/pages/dashboard.js"></script>

        <!-- Required datatable js -->
        <script src="{{ $admin_source }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{ $admin_source }}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/jszip.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="{{ $admin_source }}/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Plugins js -->
        <script src="{{ $admin_source }}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <!-- Plugins Init js -->
        <script src="{{ $admin_source }}/assets/pages/form-advanced.js"></script>

        <!-- Datatable init js -->
        <script src="{{ $admin_source }}/assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="{{ $admin_source }}/assets/js/app.js"></script>
        @toastr_js

    </body>
    @toastr_render
</html>
