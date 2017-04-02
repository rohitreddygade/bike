<!DOCTYPE html>
<?php
$sid=1;
require_once("../../includes/db/connection.php"); 
$query = "SELECT * FROM vendor_order INNER JOIN order_det ON order_det.Ven_oid=vendor_order.Ven_Oid where (vendor_order.S_id=$sid and o_stat='Query') ";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
   $O_row="";
   while ($rw1=mysql_fetch_array($query_result)) {
    $O_row.="<tr>";
    $O_row.="<td>$rw1[Ven_Oid]</td>";
    $O_row.="<td>$rw1[Bike]</td>";
    $O_row.="<td>$rw1[order_contact]</td>";
    $O_row.="<td>$rw1[email]</td>";
    $O_row.="<td>$rw1[order_desc]</td>";
    $O_row.="<td>$rw1[req_det]</td>";
    $O_row.="<td>$rw1[order_time]</td>";
    $O_row.="</tr>";
    }
    
    
?>
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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
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
                        <li >
                            <a href="voview.php" >
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li >
                            <a href="vnext.php">
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

                        <li class="active">
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
                        Queries
                        <small>Overview of orders queried</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">History</li>
                    </ol>
                </section>


                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">                            
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Customer Order Details</h3>                                    
                                </div><!-- /.box-header -->
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="sorting_desc">Order ID</th>
                                                <th>Bike</th>
                                                <th>Contact number</th>
                                                <th>Email</th>
                                                <th>Query Description</th>
                                                <th>Request in Detail</th>                                             
                                                <th>Order Time</th>                                             
                                            </tr>
                                        </thead>
                                        <tbody id="det_tab">
                                               
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Bike</th>
                                                <th>Contact number</th>
                                                <th>Email</th>
                                                <th>Query Description</th>
                                                <th>Request in Detail</th>  
                                                <th>Order Time</th>                                             
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div>
                    </div>

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

 <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../script/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../script/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../script/js/AdminLTE/demo.js" type="text/javascript"></script>
        <!-- jQuery Knob -->
        <script src="../../script/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="../../script/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="../../script/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../script/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <!-- page script -->
         <script src="../../script/js/jquery-ui-1.10.3.min.js"></script>
        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                /* jQueryKnob */
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
                $(".knob").knob({
                    /*change : function (value) {
                     //console.log("change : " + value);
                     },
                     release : function (value) {
                     console.log("release : " + value);
                     },
                     cancel : function () {
                     console.log("cancel : " + this.value);
                     },*/
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

                /* SPARKLINE DOCUMENTAION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
                drawDocSparklines();
                drawMouseSpeedDemo();

            });
            function drawDocSparklines() {

                // Bar + line composite charts
                $('#compositebar').sparkline('html', {type: 'bar', barColor: '#aaf'});
                $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
                        {composite: true, fillColor: false, lineColor: 'red'});


                // Line charts taking their values from the tag
                $('.sparkline-1').sparkline();

                // Larger line charts for the docs
                $('.largeline').sparkline('html',
                        {type: 'line', height: '2.5em', width: '4em'});

                // Customized line chart
                $('#linecustom').sparkline('html',
                        {height: '1.5em', width: '8em', lineColor: '#f00', fillColor: '#ffa',
                            minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 3});

                // Bar charts using inline values
                $('.sparkbar').sparkline('html', {type: 'bar'});

                $('.barformat').sparkline([1, 3, 5, 3, 8], {
                    type: 'bar',
                    tooltipFormat: '{{value:levels}} - {{value}}',
                    tooltipValueLookups: {
                        levels: $.range_map({':2': 'Low', '3:6': 'Medium', '7:': 'High'})
                    }
                });

                // Tri-state charts using inline values
                $('.sparktristate').sparkline('html', {type: 'tristate'});
                $('.sparktristatecols').sparkline('html',
                        {type: 'tristate', colorMap: {'-2': '#fa7', '2': '#44f'}});

                // Composite line charts, the second using values supplied via javascript
                $('#compositeline').sparkline('html', {fillColor: false, changeRangeMin: 0, chartRangeMax: 10});
                $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
                        {composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10});

                // Line charts with normal range marker
                $('#normalline').sparkline('html',
                        {fillColor: false, normalRangeMin: -1, normalRangeMax: 8});
                $('#normalExample').sparkline('html',
                        {fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4'});

                // Discrete charts
                $('.discrete1').sparkline('html',
                        {type: 'discrete', lineColor: 'blue', xwidth: 18});
                $('#discrete2').sparkline('html',
                        {type: 'discrete', lineColor: 'blue', thresholdColor: 'red', thresholdValue: 4});

                // Bullet charts
                $('.sparkbullet').sparkline('html', {type: 'bullet'});

                // Pie charts
                $('.sparkpie').sparkline('html', {type: 'pie', height: '1.0em'});

                // Box plots
                $('.sparkboxplot').sparkline('html', {type: 'box'});
                $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
                        {type: 'box', raw: true, showOutliers: true, target: 6});

                // Box plot with specific field order
                $('.boxfieldorder').sparkline('html', {
                    type: 'box',
                    tooltipFormatFieldlist: ['med', 'lq', 'uq'],
                    tooltipFormatFieldlistKey: 'field'
                });

                // click event demo sparkline
                $('.clickdemo').sparkline();
                $('.clickdemo').bind('sparklineClick', function(ev) {
                    var sparkline = ev.sparklines[0],
                            region = sparkline.getCurrentRegionFields();
                    value = region.y;
                    alert("Clicked on x=" + region.x + " y=" + region.y);
                });

                // mouseover event demo sparkline
                $('.mouseoverdemo').sparkline();
                $('.mouseoverdemo').bind('sparklineRegionChange', function(ev) {
                    var sparkline = ev.sparklines[0],
                            region = sparkline.getCurrentRegionFields();
                    value = region.y;
                    $('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
                }).bind('mouseleave', function() {
                    $('.mouseoverregion').text('');
                });
            }

            /**
             ** Draw the little mouse speed animated graph
             ** This just attaches a handler to the mousemove event to see
             ** (roughly) how far the mouse has moved
             ** and then updates the display a couple of times a second via
             ** setTimeout()
             **/
            function drawMouseSpeedDemo() {
                var mrefreshinterval = 500; // update display every 500ms
                var lastmousex = -1;
                var lastmousey = -1;
                var lastmousetime;
                var mousetravel = 0;
                var mpoints = [];
                var mpoints_max = 30;
                $('html').mousemove(function(e) {
                    var mousex = e.pageX;
                    var mousey = e.pageY;
                    if (lastmousex > -1) {
                        mousetravel += Math.max(Math.abs(mousex - lastmousex), Math.abs(mousey - lastmousey));
                    }
                    lastmousex = mousex;
                    lastmousey = mousey;
                });
                var mdraw = function() {
                    var md = new Date();
                    var timenow = md.getTime();
                    if (lastmousetime && lastmousetime != timenow) {
                        var pps = Math.round(mousetravel / (timenow - lastmousetime) * 1000);
                        mpoints.push(pps);
                        if (mpoints.length > mpoints_max)
                            mpoints.splice(0, 1);
                        mousetravel = 0;
                        $('#mousespeed').sparkline(mpoints, {width: mpoints.length * 2, tooltipSuffix: ' pixels per second'});
                    }
                    lastmousetime = timenow;
                    setTimeout(mdraw, mrefreshinterval);
                }
                // We could use setInterval instead, but I prefer to do it this way
                setTimeout(mdraw, mrefreshinterval);
            }


        </script>
    </body>
     <?php
    print "<script>document.getElementById('det_tab').innerHTML='$O_row';</script>";
    ?>
</html>

    
