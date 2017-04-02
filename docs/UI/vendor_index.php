<?php require_once("../../includes/db/connection.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rishi Motors - Hero</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../styles/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../../styles/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../../styles/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="../../styles/css/jQueryUI/jquery-ui.css">
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="http://rishihero.heromotocorpdealers.com/HMC/Default.aspx/" target="_blank" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Rishi Motors
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
                                <i class="fa fa-envelope"></i><!--feed change-->
                                <span class="label label-success" id="feednum">1</span>
                            </a>
                            <ul class="dropdown-menu"><!--feed change-->
                                <li class="header" id="feednoti">You have 1 message</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                    <!--feed change-->
                                    <ul class="menu" id="feedli">
                                        <li style="color:#000"><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                   <img src="../../styles/img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Rishi Motors
                                                    <small><i class="fa fa-clock-o"></i> 1 mins</small>
                                                </h4>
                                                <p>No new Feedback</p>
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
                                <i class="fa fa-tasks"></i>
                                <span class="label label-warning" id="notiffIcon"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header"><div id="notiff"></div></li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu" id = "notifli">
                                
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                       
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Admin <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Rishi Motors - Hero
                                        <small>Thubarahalli, Whitefield</small>
                                    </p>
                                </li>
                            
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <!-- <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div> -->
                                    <div class="pull-right">
                                        <a href="logout_vendor.php" class="btn btn-default btn-flat">Sign out</a>
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
                            <img src="../../styles/img/avatar3.png" class="img-circle" alt="User Image"/>
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Admin</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="vendor_index.php">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="calendar.php">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                <!-- <small class="badge pull-right bg-red">3</small> -->
                            </a>
                        </li>
                      <!--   <li class="treeview">
                            <a href="#">
                                <i class="fa fa-folder"></i> <span>Others</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu"> -->
                               <!--  <li><a href="../examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li> -->
                                <!-- <li><a href="logout.php"><i class="fa fa-angle-double-right"></i> Login</a></li> -->
                                <!-- <li><a href="register.php"><i class="fa fa-angle-double-right"></i> Register</a></li> -->
                                <!-- <li><a href="../examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li> -->
                            <!-- </ul> -->
                        <!-- </li> -->
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Rishi Motors
                        <small>Customer Orders</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Rishi Motors</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li class="active">Customer Order Details</li>
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
				 <form role="form" action ="vendor_index.php" method="POST">
                                    <div class="box-body">
                                      
                                            <select id="opt_tab" name="place">
				         </select>

				      <br />

				      <input type="submit" title="submit" name="submit"/>

                                    </div>
               
                                    </div><!-- /.box-body -->

                                    
                                </form>
                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                 
                                                <th>Service center</th>
						<th>Area</th>                                                
						 <th>Address</th>
						
                                            </tr>
                                        </thead>
                                        <tbody id="det_tab">
                                      
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr> 
						<th>Service Center</th>
                                                <th>Area</th>
						 <th>Address</th>
                                                
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
        <!-- DATA TABES SCRIPT -->
        <script src="../../script/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../script/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../script/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../../script/js/AdminLTE/demo.js" type="text/javascript"></script>
         <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $("#example1").dataTable();
                $('#example2').dataTable({
                    "bPaginate": true,
                    "bLengthChange": false,
                    "bFilter": false,
                    "bSort": true,
                    "bInfo": true,
                    "bAutoWidth": false
                });
            });
        </script>
<script type="text/javascript">

if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("http://rishihero.in/docs/profile/notif_sse.php");
    
    source.onmessage = function(event) {
      
        document.getElementById("notiff").innerHTML = "You have "+ event.data + " notifications<br>";
    };
} else {
    document.getElementById("notiff").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>

<script type="text/javascript">

if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("http://rishihero.in/docs/profile/notiffIcon.php");
    
    source.onmessage = function(event) {
      
        document.getElementById("notiffIcon").innerHTML = event.data;
    };
} else {
    document.getElementById("notiffIcon").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>

<script type="text/javascript">

if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("http://rishihero.in/docs/profile/notiflist_sse.php");
    
    source.onmessage = function(event) {
      
        document.getElementById("notifli").innerHTML =  event.data ;
    };
} else {
    document.getElementById("notifli").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>
<script type="text/javascript">

if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("http://rishihero.in/docs/profile/notiflist_feed.php");
    
    source.onmessage = function(event) {
      
        document.getElementById("feedli").innerHTML =  event.data ;
    };
} else {
    document.getElementById("feedli").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>
<script type="text/javascript">

if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("http://rishihero.in/docs/profile/notif_feed.php");
    
    source.onmessage = function(event) {
      
        document.getElementById("feednoti").innerHTML = "You have "+ event.data + " notifications<br>";
        document.getElementById("feednum").innerHTML =  event.data ;
    };
} else {
    document.getElementById("notiff").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>
    </body>
</html>
<?php
function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}
$dist=100.00;
$place='Domlur';
	if(isset($_POST['submit']))	{
	$place=$_POST['place'];
	
	$dist=3.00;
}
    
    $query = "SELECT * FROM area where area='".$place."'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    $query2 = "SELECT * FROM area";
    $query_result2 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
    $O_row=" ";
   
    $setopt="<option value='".$place."' selected='selected'>".$place."</option>";
    $src=mysql_fetch_array($query_result);
    $areas="'".$src['area']."'";
    while ($rw1 = mysql_fetch_array($query_result2)) {
        $setopt=$setopt."<option value='".$rw1['area']."'>".$rw1['area']."</option>";
        if(distance($src['lati'],$src['longi'],$rw1['lati'],$rw1['longi'])<$dist and $src['area']!=$rw1['area']){
            $areas = $areas.",'".$rw1['area']."'";
        }
    }
    $queryx = "SELECT * FROM serv_center where area in (".$areas.")";
    $queryx_result = mysql_query($queryx,$con)
    or die("Invalid query: " . mysql_error());
    while ($rw1 = mysql_fetch_array($queryx_result)) {
    $O_row.="<tr>";
    $O_row.="<td>$rw1[S_name]</td>";
    $O_row.="<td>$rw1[area]</td>";
    $O_row.="<td>$rw1[address]</td>";
    $O_row.="</tr>";
     }
    print "<script>document.getElementById('det_tab').innerHTML='$O_row'+document.getElementById('det_tab').innerHTML;</script>";
    print "<script>document.getElementById('opt_tab').innerHTML=\"".$setopt."\";</script>";
    ?>
    
