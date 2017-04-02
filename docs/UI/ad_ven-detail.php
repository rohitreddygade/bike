<!DOCTYPE html>
<?php
$sid=1;
$today=date("Y-m-d");
$today="2014-07-25";
require_once("../../includes/db/connection.php"); 
$query = "SELECT * FROM vendor_order where S_id=$sid";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$total=mysql_fetch_array($query_result);
$query = "SELECT count(*) as dp FROM vendor_order where (S_id=$sid and o_stat='Decision Pending' and final_aapt_dt between '$today 00:00:00' and  '$today 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$dp=$new['dp'];

$query = "SELECT count(*) as A FROM vendor_order where (S_id=$sid and o_stat='Allotted' and final_aapt_dt between '$today 00:00:00' and  '$today 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$A=$new['A'];

$query = "SELECT count(*) as C FROM vendor_order where (S_id=$sid and o_stat='Confirmed' and final_aapt_dt between '$today 00:00:00' and  '$today 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$C=$new['C'];

$query = "SELECT count(*) as pick FROM vendor_order where (S_id=$sid and pickup=0 and final_aapt_dt between '$today 00:00:00' and  '$today 23:59:59') " ;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$pick=$new['pick'];

$query = "SELECT count(*) as Nopick FROM vendor_order where (S_id=$sid and pickup=1 and final_aapt_dt between '$today 00:00:00' and  '$today 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$Nopick=$new['Nopick'];

$query1 = "SELECT count(*) as day FROM vendor_order where (S_id=$sid and final_aapt_dt between '$today 00:00:00' and  '$today 18:00:00') " ;
    $query_result1 = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());
$day=mysql_fetch_array($query_result1);
$daycount=$day['day'];
$query2 = "SELECT count(*) as night FROM vendor_order where (S_id=$sid and final_aapt_dt between '$today 18:00:00' and  '$today 23:59:59') ";
    $query_result2 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
$night=mysql_fetch_array($query_result2);
$nightcount=$night['night'];

$query2 = "SELECT count(*) as ww FROM vendor_order INNER JOIN order_det ON order_det.Ven_oid=vendor_order.Ven_Oid where (vendor_order.S_id=$sid and order_det.order_cat='Waterwash' and vendor_order.final_aapt_dt between '$today 00:00:00' and  '$today 23:59:59') ";
    $query_result2 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
$ww=mysql_fetch_array($query_result2);
$wwcount=$ww['ww'];

$query2 = "SELECT count(*) as ww FROM vendor_order INNER JOIN order_det ON order_det.Ven_oid=vendor_order.Ven_Oid where (vendor_order.S_id=$sid and order_det.order_cat='Periodic Servicing' and vendor_order.final_aapt_dt between '$today 00:00:00' and  '$today 23:59:59') ";
    $query_result2 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
$ww=mysql_fetch_array($query_result2);
$pscount=$ww['ww'];

$query2 = "SELECT count(*) as ww FROM vendor_order INNER JOIN order_det ON order_det.Ven_oid=vendor_order.Ven_Oid where (vendor_order.S_id=$sid and order_det.order_cat='Repair' and vendor_order.final_aapt_dt between '$today 00:00:00' and  '$today 23:59:59') ";
    $query_result2 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
$ww=mysql_fetch_array($query_result2);
$repaircount=$ww['ww'];

$query2 = "SELECT count(*) as ww FROM vendor_order INNER JOIN order_det ON order_det.Ven_oid=vendor_order.Ven_Oid where (vendor_order.S_id=$sid and order_det.order_cat='Insurance' and vendor_order.final_aapt_dt between '$today 00:00:00' and  '$today 23:59:59') ";
    $query_result2 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
$ww=mysql_fetch_array($query_result2);
$inscount=$ww['ww'];


?>
<?php
$day1=date("Y-m-d", time()+86400); 
$day2=date("Y-m-d", time()+86400*2); 
$day3=date("Y-m-d", time()+86400*3); 
$day4=date("Y-m-d", time()+86400*4); 
$day5=date("Y-m-d", time()+86400*5); 
$day6=date("Y-m-d", time()+86400*6); 

$query = "SELECT count(*) as dp FROM vendor_order where (S_id=$sid and o_stat='Query' and exp_aapt_dt between '$day1 00:00:00' and  '$day1 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$dp1=$new['dp'];
$query = "SELECT count(*) as dp FROM vendor_order where (S_id=$sid and o_stat='Query' and exp_aapt_dt between '$day2 00:00:00' and  '$day2 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$dp2=$new['dp'];
$query = "SELECT count(*) as dp FROM vendor_order where (S_id=$sid and o_stat='Query' and exp_aapt_dt between '$day3 00:00:00' and  '$day3 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$dp3=$new['dp'];
$query = "SELECT count(*) as dp FROM vendor_order where (S_id=$sid and o_stat='Query' and exp_aapt_dt between '$day4 00:00:00' and  '$day4 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$dp4=$new['dp'];
$query = "SELECT count(*) as dp FROM vendor_order where (S_id=$sid and o_stat='Query' and exp_aapt_dt between '$day5 00:00:00' and  '$day5 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$dp5=$new['dp'];
$query = "SELECT count(*) as dp FROM vendor_order where (S_id=$sid and o_stat='Query' and exp_aapt_dt between '$day6 00:00:00' and  '$day6 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$dp6=$new['dp'];

$query = "SELECT count(*) as A FROM vendor_order where (S_id=$sid and o_stat='Decision Pending' and exp_aapt_dt between '$day1 00:00:00' and  '$day1 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$A1=$new['A'];
$query = "SELECT count(*) as A FROM vendor_order where (S_id=$sid and o_stat='Decision Pending' and exp_aapt_dt between '$day2 00:00:00' and  '$day2 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$A2=$new['A'];
$query = "SELECT count(*) as A FROM vendor_order where (S_id=$sid and o_stat='Decision Pending' and exp_aapt_dt between '$day3 00:00:00' and  '$day3 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$A3=$new['A'];
$query = "SELECT count(*) as A FROM vendor_order where (S_id=$sid and o_stat='Decision Pending' and exp_aapt_dt between '$day4 00:00:00' and  '$day4 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$A4=$new['A'];
$query = "SELECT count(*) as A FROM vendor_order where (S_id=$sid and o_stat='Decision Pending' and exp_aapt_dt between '$day5 00:00:00' and  '$day5 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$A5=$new['A'];
$query = "SELECT count(*) as A FROM vendor_order where (S_id=$sid and o_stat='Decision Pending' and exp_aapt_dt between '$day6 00:00:00' and  '$day6 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$A6=$new['A'];

$query = "SELECT count(*) as C FROM vendor_order where (S_id=$sid and o_stat='Confirmed' and final_aapt_dt between '$day1 00:00:00' and  '$day1 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$C1=$new['C'];

$query = "SELECT count(*) as C FROM vendor_order where (S_id=$sid and o_stat='Confirmed' and final_aapt_dt between '$day2 00:00:00' and  '$day2 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$C2=$new['C'];
$query = "SELECT count(*) as C FROM vendor_order where (S_id=$sid and o_stat='Confirmed' and final_aapt_dt between '$day3 00:00:00' and  '$day3 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$C3=$new['C'];
$query = "SELECT count(*) as C FROM vendor_order where (S_id=$sid and o_stat='Confirmed' and final_aapt_dt between '$day4 00:00:00' and  '$day4 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$C4=$new['C'];
$query = "SELECT count(*) as C FROM vendor_order where (S_id=$sid and o_stat='Confirmed' and final_aapt_dt between '$day5 00:00:00' and  '$day5 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$C5=$new['C'];
$query = "SELECT count(*) as C FROM vendor_order where (S_id=$sid and o_stat='Confirmed' and final_aapt_dt between '$day6 00:00:00' and  '$day6 23:59:59') " ;;
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
$new=mysql_fetch_array($query_result);
$C6=$new['C'];
 

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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <style type="text/css">
${demo.css}
        </style>
        <script type="text/javascript">
$(function () {
        $('#container01').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['Today'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: '',
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
                x: -235,
                y: 63,
                floating: true,
                borderWidth: 0,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'DP',
                data: [<?php echo $dp;?>]
            }, {
                name: 'C',
                data: [<?php echo $C;?>]
            }, {
                name: 'A',
                data: [<?php echo $A;?>]
            }]
        });
        $('#container21').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['Day','Overnight'],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: '',
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
                x: -250,
                y: 63,
                floating: true,
                borderWidth: 0,
                backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor || '#FFFFFF'),
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'D',
                data: [<?php echo $daycount;?>]
            }, {
                name: 'N',
                data: [<?php echo $nightcount;?>]
            }]
        });
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
                categories: [<?php echo "'".$day1."','".$day2."','".$day3."','".$day4."','".$day5."','".$day6."'";?>],
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
                name: 'Queried',
                data: [<?php echo $dp1.",".$dp2.",".$dp3.",".$dp4.",".$dp5.",".$dp6;?>]
            }, {
                name: 'Confirmed',
                data: [<?php echo $C1.",".$C2.",".$C3.",".$C4.",".$C5.",".$C6;?>]
            }, {
                name: 'Expected',
                data: [<?php echo $A1.",".$A2.",".$A3.",".$A4.",".$A5.",".$A6;?>]
            }]
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
                                 <div id="container01" style="min-width: 110px; max-width: 300px; height: 150px; margin: 0 auto"></div>

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
                                     <div id="container21" style="min-width: 110px; max-width: 300px; height: 150px; margin: 0 auto"></div>
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
                                       <?php echo $pick.",".$Nopick;?>
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
                                            <input type="text" class="knob" readOnly="true" value="<?php echo $pscount;?>" data-skin="tron" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#00a65a"/>
                                            <div class="knob-label">Periodic Servicing</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="<?php echo $wwcount;?>" readOnly="true" data-skin="tron" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#00c0ef"/>
                                            <div class="knob-label">Water Wash</div>
                                        </div><!-- ./col -->
                                       <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="<?php echo $repaircount;?>" data-skin="tron" readOnly="true" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#f56954"/>
                                            <div class="knob-label">Repair/Accidental</div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="<?php echo $inscount;?>" data-skin="tron" readOnly="true" data-thickness="0.2" data-width="120" data-height="120" data-fgColor="#932ab6"/>
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
                                            <input type="text" class="knob" value="<?php echo $dp1+$C1?>" data-width="90" data-height="90" data-fgColor="#3c8dbc"/>
                                            <div class="knob-label"><?php echo $day1;?></div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="<?php echo $dp2+$C2?>" data-width="90" data-height="90" data-fgColor="#f56954"/>
                                            <div class="knob-label"><?php echo $day2;?></div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="<?php echo $dp3+$C3?>"  data-width="90" data-height="90" data-fgColor="#00a65a"/>
                                            <div class="knob-label"><?php echo $day3;?></div>
                                        </div><!-- ./col -->
                                        <div class="col-md-3 col-sm-6 col-xs-6 text-center">
                                            <input type="text" class="knob" value="<?php echo $dp4+$C4?>" data-width="90" data-height="90" data-fgColor="#00c0ef"/>
                                            <div class="knob-label"><?php echo $day4;?></div>
                                        </div><!-- ./col -->
                                    </div><!-- /.row -->

                                    <div class="row">
                                        <div class="col-xs-6 text-center">
                                            <input type="text" class="knob" value="<?php echo $dp5+$C5?>" data-width="90" data-height="90" data-fgColor="#932ab6"/>
                                            <div class="knob-label"><?php echo $day5;?></div>
                                        </div><!-- ./col -->
                                        <div class="col-xs-6 text-center">
                                            <input type="text" class="knob" value="<?php echo $dp6+$C6?>" data-width="90" data-height="90" data-fgColor="#39CCCC"/>
                                            <div class="knob-label"><?php echo $day6;?></div>
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
