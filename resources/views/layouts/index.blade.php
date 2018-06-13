<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/admin/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/admin/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/admin/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="/dist/summernote.min.css" type="text/css" href="">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet"> 
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        @include('partials.nav')

        <div id="page-wrapper">

          @yield('content')
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/admin/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/admin/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/admin/plugins/morris/raphael.min.js"></script>
    <script src="js/admin/plugins/morris/morris.min.js"></script>
    <script src="js/admin/plugins/morris/morris-data.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.colorbox-min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script> 
</body>

</html>
