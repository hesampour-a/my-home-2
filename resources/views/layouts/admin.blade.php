<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>صفحه شروع | کنترل پنل</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->

    <!-- Bootstrap rtl -->

    <link href="{{ asset('adminpanel/dist/css/rtl.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('adminpanel/bower_components/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Ionicons -->
    <link href="{{ asset('adminpanel/bower_components/Ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <!-- Theme style -->

    <link href="{{ asset('adminpanel/dist/css/AdminLTE.css') }}" rel="stylesheet">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->

    <link href="{{ asset('adminpanel/dist/css/skins/skin-blue.min.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- jQuery 3 -->

    <script src="{{ asset('adminpanel/bower_components/jquery/dist/jquery.min.js') }}" defer></script>
    <!-- Bootstrap 3.3.7 -->

    <script src="{{ asset('adminpanel/bower_components/bootstrap/dist/js/bootstrap.min.js') }}" defer></script>

    <script src="{{ asset('adminpanel/dist/js/adminlte.min.js') }}" defer></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">پنل</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>کنترل پنل مدیریت</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </nav>
        </header>
        <!-- right side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">




                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">

                    <!-- Optionally, you can add icons to the links -->
                    <!-- <li class="active"><a href="#"><i class="fa fa-link"></i> <span>لینک</span></a></li>
                    <li><a href="#"><i class="fa fa-link"></i> <span>لینک ۲</span></a></li>
                    <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>چند سطحی</span>
                            <span class="pull-left-container">
                                <i class="fa fa-angle-right pull-left"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">لینک سطح ۱</a></li>
                            <li><a href="#">لینک سطح ۱</a></li>
                        </ul>
                    </li> -->
                    <li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>مدیریت کاربران</span>
                            <span class="pull-left-container">
                                <i class="fa fa-angle-right pull-left"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('users.index') }}">مشاهده کاربران</a></li>
                            <li><a href="{{route('users.create')}}">ایجاد کاربر جدید</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('roles.index') }}"><i class="fa fa-link"></i> <span>مدیریت سطح دسترسی</span></a></li>
                    <li><a href="{{ route('adminInLights.index') }}"><i class="fa fa-link"></i> <span>مدیریت لامپ های داخل</span></a></li>
                    <li><a href="{{ route('adminOutLights.index') }}"><i class="fa fa-link"></i> <span>مدیریت لامپ های بیرون</span></a></li>


                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content container-fluid">

                <div class="container">
                    @yield('content')
                </div>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->
</body>

</html>
