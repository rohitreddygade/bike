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
        <script type="text/javascript">
$(function () {
        $('#container11').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Customer Order Statistic Report for Next 6 days'
            },
            subtitle: {
                text: 'Source: MotoRevive'
            },
            xAxis: {
                categories: ['21/07', '22/07', '23/07', '24/07', '25/07' ,'26/07'],
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
                name: 'UnAllotted',
                data: [107, 31, 635, 203, 2,35]
            }, {
                name: 'Upcoming',
                data: [133, 156, 947, 408, 6,123]
            }, {
                name: 'Allotted',
                data: [973, 914, 405, 732, 34,1234]
            }]
        });
            $(".knob").knob({
                    draw: function() {

                        // "tron" case
                        if (this.$.data('skin') == 'tron') {

                            var a = this.angle(this.cv)  // Angle
                                    , sa = this.startAngle          // Previous start angle
                                    , sat = this.startAngle         // Start angle
                                    , ea                            // Previous end angle
                                    , eat = sat + a                 // End angle
                                    , r = true;

                            this.g.lineWidth = this.lineWidth;

                            this.o.cursor
                                    && (sat = eat - 0.3)
                                    && (eat = eat + 0.3);

                            if (this.o.displayPrevious) {
                                ea = this.startAngle + this.angle(this.value);
                                this.o.cursor
                                        && (sa = ea - 0.3)
                                        && (ea = ea + 0.3);
                                this.g.beginPath();
                                this.g.strokeStyle = this.previousColor;
                                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
                                this.g.stroke();
                            }

                            this.g.beginPath();
                            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
                            this.g.stroke();

                            this.g.lineWidth = 2;
                            this.g.beginPath();
                            this.g.strokeStyle = this.o.fgColor;
                            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
                            this.g.stroke();

                            return false;
                        }
                    }
                });
                /* END JQUERY KNOB */

                //INITIALIZE SPARKLINE CHARTS
                $(".sparkline").each(function() {
                    var $this = $(this);
                    $this.sparkline('html', $this.data());
                });
    });
    

        </script>
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
                            <a href="voview.php" >
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li >
                            <a href="vnext_sample.php">
                                <i class="fa fa-calendar"></i> <span>Upcoming</span> <small class="badge pull-right bg-green">10</small>
                            </a>
                        </li>
                        <li>
                            <a href="vallot.php">
                                <i class="fa fa-cogs"></i> <span>Allotted</span>
                                <small class="badge pull-right bg-blue">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="vservcd.php">
                                <i class="fa fa-check-square"></i> <span>Serviced</span>
                                <small class="badge pull-right bg-yellow">12</small>
                            </a>
                        </li>

                        <li>
                            <a href="vquery.php">
                                <i class="fa fa-flag"></i> <span>Queried</span>
                                <small class="badge pull-right bg-red">12</small>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Others</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="varchive.php"><i class="fa fa-angle-double-right"></i> History</a></li>
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

                        
                            <!-- jQuery Knob -->
                            <div class='callout callout-info'>
                        <h4>Today's Orders Summary</h4>
                        <p>The following graphs and ring charts provide you complete details of today's orders.</p>
                        </div>
                               <div class="row">

                     <div class="col-md-4" style="">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title text-warning">Today's Orders</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body text-center">
                                    <div class="sparkline" data-type="bar" data-width="100%" data-height="100px" data-bar-Width="44" data-bar-Spacing="10" data-bar-Color="#f39c12">
                                        40,38,38,44,39
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                        <div class="col-md-4" style="">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title text-warning">Day&nbsp; v/s Overnight</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body text-center">
                                    <div class="sparkline" data-type="bar" data-width="97%" data-height="100px" data-bar-Width="44" data-bar-Spacing="7" data-bar-Color="#00a65a">
                                        10,6
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                         <div class="col-md-4"  style="">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title text-danger">PickUp Ratio</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body text-center">
                                    <div class="sparkline" data-type="pie" data-offset="90" data-width="100px" data-height="100px">
                                        6,4
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                        
                        <div class="col-xs-12">
                            <!-- jQuery Knob -->

                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <h3 class="box-title">Order Split Details - Today</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="43" data-skin="tron" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#00a65a"/>
                                            <div class="knob-label">Periodic Servicing</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="32" data-skin="tron" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#00c0ef"/>
                                            <div class="knob-label">Water Wash</div>
                                        </div><!-- ./col -->
                                       <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="54" data-skin="tron" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#f56954"/>
                                            <div class="knob-label">Repair/Accidental</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="14" data-skin="tron" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#932ab6"/>
                                            <div class="knob-label">Insurance Renewal</div>
                                        </div><!-- ./col -->

                                    </div><!-- /.row -->

                                   
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <script src="../../script/js/plugins/js/highcharts.js"></script>
                        <script src="../../script/js/plugins/js/modules/exporting.js"></script>
                        <div class='callout callout-info'>
                        <h4>Comparison of Orders in the coming week</h4>
                        <p>The following bar graph helps you to compare order load in the next 6 days.</p>
                        </div>
                    <div class="row">
                     <div class="col-xs-12" style="">
                            <div class="box box-solid">
                    <div id="container11" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>
                    </div>
                    </div>
                    </div>
                    <div class='callout callout-info'>
                        <h4>Overview of Orders in the coming week</h4>
                        <p>The following six ring charts helps you to interpret order load in the next 6 days.</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-bar-chart-o"></i>
                                    <h3 class="box-title">Total Orders - Next 6 Days</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div><!-- /.box-header -->
                                 <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc"/>
                                            <div class="knob-label">21/07</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgColor="#f56954"/>
                                            <div class="knob-label">22/07</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="80"  data-width="90" data-height="90" data-fgColor="#00a65a"/>
                                            <div class="knob-label">23/07</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef"/>
                                            <div class="knob-label">24/07</div>
                                        </div><!-- ./col -->
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-xs-6 text-center">
                                            <input type="text" class="knob" value="90" data-width="90" data-height="90" data-fgColor="#932ab6"/>
                                            <div class="knob-label">25/07</div>
                                        </div><!-- ./col -->
                                        <div class="col-xs-6 text-center">
                                            <input type="text" class="knob" value="50" data-width="90" data-height="90" data-fgColor="#39CCCC"/>
                                            <div class="knob-label">26/07</div>
                                        </div><!-- ./col -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                           


                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- Bootstrap -->
        <script src="../../script/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <!-- AdminLTE for demo purposes -->
        <!-- jQuery Knob -->
        <script src="../../script/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="../../script/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>

    </body>
</html>
