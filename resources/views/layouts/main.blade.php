<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    {!! Html::style("theme/adminLTE/bootstrap/css/bootstrap.min.css") !!}
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Theme style -->
    {!! Html::style("theme/adminLTE/dist/css/AdminLTE.min.css") !!}
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    {!! Html::style("theme/adminLTE/dist/css/skins/skin-green.css") !!}
    <!-- DataTables Bootstrap 1.10.6 -->
    {!! Html::style("theme/adminLTE/plugins/datatables/css/dataTables.bootstrap.css") !!}
    {!! Html::style("theme/adminLTE/plugins/datatables/extensions/responsive/css/dataTables.responsive.css") !!}
    <!-- Bootstrap datepicker -->
    {!! Html::style("theme/adminLTE/plugins/datepicker/css/bootstrap-datepicker.min.css") !!}
    <!-- Date range picker -->
    {!! Html::style("theme/adminLTE/plugins/daterangepicker/daterangepicker-bs3.css") !!}
    <!-- iCheck -->
    {!! Html::style("theme/adminLTE/plugins/iCheck/all.css") !!}
    <!-- Select2 -->
    {!! Html::style("plugins/select2/css/select2.min.css") !!}

    {!! Html::style("css/app.css") !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery 2.1.3 -->
    {!! Html::script("theme/adminLTE/plugins/jQuery/jQuery-2.1.3.min.js") !!}
    <!-- Bootstrap 3.3.2 JS -->
    {!! Html::script("theme/adminLTE/bootstrap/js/bootstrap.min.js") !!}
    <!-- SlimScroll -->
    {!! Html::script("theme/adminLTE/plugins/slimScroll/jquery.slimScroll.min.js") !!}
    <!-- FastClick -->
    {!! Html::script("theme/adminLTE/plugins/fastclick/fastclick.min.js") !!}
    <!-- DataTables 1.10.6 -->
    {!! Html::script("theme/adminLTE/plugins/datatables/js/jquery.dataTables.min.js") !!}
    {!! Html::script("theme/adminLTE/plugins/datatables/js/dataTables.bootstrap.min.js") !!}
    {!! Html::script("theme/adminLTE/plugins/datatables/extensions/responsive/js/dataTables.responsive.min.js") !!}
    <!-- Bootstrap datepicker -->
    {!! Html::script("theme/adminLTE/plugins/datepicker/js/bootstrap-datepicker.min.js") !!}
    <!-- Date range picker -->
    {!! Html::script("theme/adminLTE/plugins/daterangepicker/moment.js") !!}
    {!! Html::script("theme/adminLTE/plugins/daterangepicker/daterangepicker.js") !!}
    <!-- Twitter Bootstrap Form Wizzrd -->
    {!! Html::script("plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js") !!}
    <!-- iCheck -->
    {!! Html::script("theme/adminLTE/plugins/iCheck/icheck.min.js") !!}
    <!-- Select2 -->
    {!! Html::script("plugins/select2/js/select2.full.min.js") !!}
    <!-- Jquery Validate -->
    {!! Html::script("plugins/jquery-validate/jquery.validate.min.js") !!}
    <!-- AdminLTE App -->
    {!! Html::script("theme/adminLTE/dist/js/app.min.js") !!}
    <!-- App -->
    {!! Html::script("js/app.js") !!}
</head>
<body class="skin-green">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <a href="{{url('/')}}" class="logo"><b>Teamgym</b>EST</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{url('img/profile/profile-icon.png')}}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ $user->person->getFullName() }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{url('img/profile/profile-icon.png')}}" class="img-circle" alt="User Image">

                                <p>
                                    {{ $user->person->getFullName() }}
                                    <small>{{ $user->role_code}}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
<!--                                <div class="pull-left">-->
<!--                                    <a href="#" class="btn btn-default btn-flat">Profile</a>-->
<!--                                </div>-->
                                <div class="pull-right">
                                    <a href="{{url('auth/logout')}}" class="btn btn-default btn-flat">Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <!-- Left side column. contains the sidebar -->
    @include('layouts.left-sidebar')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @include('flash::message')
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @yield('content')
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>
</div>
<!-- ./wrapper -->


</body>
</html>