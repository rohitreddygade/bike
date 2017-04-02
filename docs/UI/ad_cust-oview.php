<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>MotoRevive</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../styles/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../styles/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
        ${demo.css}
        </style>
    </head>
<body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="../../index.php" target="_blank" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                MotoRevive
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="label label-success">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 1 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Feedback
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>You have 1new Feedback</p>
                                            </a>
                                        </li><!-- end message -->
                                                                            </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-warning"></i>
                                <span class="label label-warning">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 1 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> You have a pickUp in 1hr @Marathahalli
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="label label-danger">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 1 New Order</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                         <li>
                                            <a href="#">
                                                <i class="ion ion-ios7-people info"></i> You have a pickUp in 1hr @Marathahalli
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all Orders</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Admin<i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../styles/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Admin - Rishi Hero
                                        <small>Thubarahalli</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                        
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="../../styles/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Admin</p>

                            
                        </div>
                    </div>
                   
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="ad_cust-oview.php" >
                                <i class="fa fa-dashboard"></i> <span>Customer Dashboard</span>
                            </a>
                        </li>
                        <li >
                            <a href="ad_ven-oview.php" >
                                <i class="fa fa-dashboard"></i> <span>Vendor Dashboard</span>
                            </a>
                        </li>
                        <li >
                            <a href="ad_cust-detail.php" >
                                <i class="fa fa-dashboard"></i> <span>Customer Detail-board</span>
                            </a>
                        </li>
                        <li >
                            <a href="ad_ven-detail.php" >
                                <i class="fa fa-dashboard"></i> <span>Vendor Detail-board</span>
                            </a>
                        </li>
                        <li >
                            <a href="vnext.php">
                                <i class="fa fa-calendar"></i> <span>Feedback Portal</span> <small class="badge pull-right bg-green">10</small>
                            </a>
                        </li>
                        <li>
                            <a href="vallot.php">
                                <i class="fa fa-cogs"></i> <span>Slot Management</span>
                            </a>
                        </li>
                        <li>
                            <a href="vservcd.php">
                                <i class="fa fa-check-square"></i> <span>Admin Remarks</span>
                            </a>
                        </li>

                        <li>
                            <a href="vquery.php">
                                <i class="fa fa-flag"></i> <span>Calendar</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Others</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="varchive.php"><i class="fa fa-angle-double-right"></i>Analysis</a></li>
                                <li><a href="vprofile.php"><i class="fa fa-angle-double-right"></i>Edit Profile</a></li>
                                <li><a href="vfeed.php"><i class="fa fa-angle-double-right"></i>Feedback</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Dashboard
                        <small>Overview & Analysis</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>
                
                
                <!-- Main content -->
                <section class="content">
                     <h4 class="page-header">
                        Customer Orders' Overview
                    </h4>
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h2>
                                        New Orders
                                    </h2>
                                    <p>
                                    <h3>494</h3>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-plus-circled"></i>
                                </div>
                                <a href="ad_cust-new.php" target="_blank"class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h2>
                                        Today's
                                    </h2>
                                    <p>

                                        <h3>619</h3>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-clock"></i>
                                </div>
                                <a href="ad_cust-allot.php" target="_blank" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                          <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h2>
                                        Query Delays
                                    </h2>
                                    <p>
                                        <h3>41</h3>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-alert-circled"></i>
                                </div>
                                <a href="ad_cust-dq.php" target="_blank" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h2>
                                        Status Delays
                                    </h2>
                                    <p>
                                    <h3>71</h3>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-flag"></i>
                                </div>
                                <a href="ad_cust-ds.php" target="_blank" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                      
                    </div><!-- /.row -->
                      
                    <script src="../../script/js/plugins/js/highcharts.js"></script>
                        <script src="../../script/js/plugins/js/modules/exporting.js"></script>
                        <div class='callout callout-info'>
                        <h4>Comparison of Orders and Allocation</h4>
                        <p>The following bar graph helps you to compare order statistics and allocation for different showrooms in the location/area selected.</p>
                        </div>
                        <div class="form-group" style="float:left;margin-left:20px;">
                                         <label>Select Area<span class="error" id="scat">*</span></label>
                                        <select class="form-control" id="mark" name="mark">
                                         <option value="">--Select--</option>
                                              <option value="Bajaj">Whitefield</option>
                                              <option value="Hero">Marathahalli</option>
                                              <option value="Honda">Koramangala</option>
                                              <option value="TVS" >Indiranagar</option>
                                              <option value="Enfield" >JayaNagar</option>
                                              <option value="Yamaha" >Malleshwaram</option>
                                              <option value="Suzuki" >Domlur</option>
                                              <option value="KTM" >Electronic City</option>
                                        </select>
                                    </div>
                    <div class="row">
                     <div class="col-xs-12" style="">
                            <div class="box box-solid">
                    <div id="container11" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                    </div>
                    </div>
                    </div>
                    <div class="col-xs-12">                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">PickUp Requests for the Day</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="pickUpTab" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="sorting_desc">Order ID</th>
                                                <th>Bike</th>
                                                <th>Service Type</th>
                                                <th>Status</th>
                                                <th>Ordered On</th>
                                                <th>Pick Up</th>
                                                <th>Contact</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="det_tab">
                                                <tr>
                                                <th >123456789</th>
                                                <th>karizma</th>
                                                <th>Periodic Servicing</th>
                                                <th>Confirmed</th>
                                                <th>27-07-2014</th>
                                                <th>Yes</th>
                                                <th>8123456789</th>
                                                
                                            </tr>
                                             <tr>
                                                <th >123456789</th>
                                                <th>karizma</th>
                                                <th>Periodic Servicing</th>
                                                <th>Confirmed</th>
                                                <th>27-07-2014</th>
                                                <th>Yes</th>
                                                <th>8123456789</th>
                                                
                                            </tr>
                                             <tr>
                                                <th >123456789</th>
                                                <th>karizma</th>
                                                <th>Periodic Servicing</th>
                                                <th>Confirmed</th>
                                                <th>27-07-2014</th>
                                                <th>Yes</th>
                                                <th>8123456789</th>
                                                
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                  <th>Order ID</th>
                                                <th>Bike</th>
                                                <th>Service Type</th>
                                                <th>Status</th>
                                                <th>Ordered On</th>
                                                <th>Pick Up</th>
                                                <th>Contact</th>
                                             </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                     <div class="col-xs-12">                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">All Orders' Details</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="allTab" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="sorting_desc">Order ID</th>
                                                <th>Bike</th>
                                                <th>Service Type</th>
                                                <th>Status</th>
                                                <th>Ordered On</th>
                                                <th>Pick Up</th>
                                                <th>Contact</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="det_tab">
                                                <tr>
                                                <th >123456789</th>
                                                <th>karizma</th>
                                                <th>Periodic Servicing</th>
                                                <th>Confirmed</th>
                                                <th>27-07-2014</th>
                                                <th>Yes</th>
                                                <th>8123456789</th>
                                                
                                            </tr>
                                             <tr>
                                                <th >123456789</th>
                                                <th>karizma</th>
                                                <th>Periodic Servicing</th>
                                                <th>Confirmed</th>
                                                <th>27-07-2014</th>
                                                <th>Yes</th>
                                                <th>8123456789</th>
                                                
                                            </tr>
                                             <tr>
                                                <th >123456789</th>
                                                <th>karizma</th>
                                                <th>Periodic Servicing</th>
                                                <th>Confirmed</th>
                                                <th>27-07-2014</th>
                                                <th>Yes</th>
                                                <th>8123456789</th>
                                                
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                  <th>Order ID</th>
                                                <th>Bike</th>
                                                <th>Service Type</th>
                                                <th>Status</th>
                                                <th>Ordered On</th>
                                                <th>Pick Up</th>
                                                <th>Contact</th>
                                             </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- Bootstrap -->

         <script src="../../script/js/jquery-ui-1.10.3.min.js"></script>
        <script src="../../script/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="../../script/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../../script/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script src="../../script/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
                <script type="text/javascript">
        $(function () {
        $("#pickUpTab").dataTable();
        $("#allTab").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
        $('#container11').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Customer Order Statistic Report for Showrooms near Whitefield'
            },
            subtitle: {
                text: 'Source: MotoRevive'
            },
            xAxis: {
                categories: ['Rishi Hero', 'Haiku Honda', 'Sai Motors', 'Joy KTM', 'Lakshmi Motors' ,'Dev Motors'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Orders (Scaled)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: 'Orders'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Delayed',
                data: [107, 31, 635, 203, 2,35]
            }, {
                name: 'Allotted',
                data: [133, 156, 947, 408, 6,123]
            }, {
                name: 'New Orders',
                data: [973, 914, 405, 732, 34,1234]
            }]
        });
});
    

        </script>
    </body>
</html>
