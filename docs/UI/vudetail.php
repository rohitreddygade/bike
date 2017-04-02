<?/*php require_once("includes/connection.php"); 
require_once "send_mail.php";*/?>
<?php
/*if (!session_id()) session_start();
//changed 
if(isset($_SESSION['userid'])and $_SESSION['userid']=="admin"){
$uid=$_SESSION['userid'];
}else{
session_destroy();
header('location: logout_vendor.php',true,303);
}*/
?>

<?php
    
   /* 
    $oid = $_GET['oid'];
    $query = "UPDATE vendor_order SET view_status='0' WHERE O_ID='$oid'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    $query = "SELECT * FROM vendor_order WHERE O_ID='$oid'";
    $query2 = "SELECT * FROM vendor_order WHERE O_ID='$oid'";
    $query3 = "SELECT service_price FROM price WHERE O_ID='$oid'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    $query2_result = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
    $query3_result = mysql_query($query3,$con)
    or die("Invalid query: " . mysql_error());
    $rw2 = mysql_fetch_array($query2_result);

    $dd_vendor = $rw2['order_dd'];
    $custID = $rw2['CustID'];
    $regph = substr($custID, -10);
    $query4 = "SELECT * FROM user WHERE contact='$regph'";
    $query4_result = mysql_query($query4,$con)
    or die("Invalid query: " . mysql_error());
    $rw4 = mysql_fetch_array($query4_result);
    $custName = $rw4['user_name'];
    $Otime = $rw2['order_time'];
    $st = $rw2['ser_type'];
    $sm = $rw2['ser_mode'];
    $sc = $rw2['ser_cat'];
    $cdd = $rw2['dd'];
    $rd = $rw2['req_detail'];
    $addr = $rw2['addr'];
    $addInfo = $rw2['add_info'];
    $phone = $rw2['phone'];
    $email = $rw2['email'];
    $serv_adv = $rw2['serv_adv'];
    $rw3 = mysql_fetch_array($query3_result);
    $price = $rw3['service_price'];
    $O_row=" ";

    while ($rw1 = mysql_fetch_array($query_result)) {

    $O_row.="<select class='form-control'  id='status' disabled>";                         
    $O_row.="<option>";
    $O_row.="$rw1[order_status]";
    $O_row.="</option>";
    $O_row.="</select>";
    }  
    */
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rishi Motors - Hero</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../styles/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../../styles/css/style.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
                <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
        <link href="../../styles/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../../styles/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />

        <script src="js/jquery.reveal.js"></script>
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
                                                    <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
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
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
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
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
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
                                    <h3 class="box-title">Order Details of <?php /*echo $custName*/ ?>   </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 200px">Index</th>
                                            <th>Details</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Order ID</td>
                                            <td>
                                                <?php  /*echo $oid*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Customer ID</td>
                                            <td>
                                                <?php  /*echo $custID*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Customer Name</td>
                                            <td>
                                                <?php  /*echo $custName*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Ordered On</td>
                                            <td>
                                                 <?php  /*echo $Otime*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Service Type</td>
                                            <td>
                                                <?php  /*echo $st*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Service Mode</td>
                                            <td>
                                                <?php  /*echo $sm*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Service</td>
                                            <td>
                                                <?php  /*echo $sc*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Customer Deadline</td>
                                            <td>
                                                <?php  /*echo $cdd*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Request Detail</td>
                                            <td>
                                                <?php  /*echo $rd*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Address</td>
                                            <td>
                                            <?php  /*echo $addr*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Other  Info</td>
                                            <td>
                                                <?php  /*echo $addInfo*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>Mobile No.</td>
                                            <td>
                                                <?php  /*echo $phone*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>e-mail ID</td>
                                            <td>
                                                <?php  /*echo $email*/ ?>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Status</td>
                                            <form action="vendor_detail.php?oid=<?php /*echo $oid; */?>" method="POST">
                                            <td>
                                            <div >
                                            <?php 
                                               /* echo $O_row;*/
                                            ?>
                                            </div>
                                            <select class="form-control" id="status_upd"  name="status" style="display:none;">
                                                <option selected>Appointment Confirmed</option>
                                                <option>Rescheduled</option>
                                                <option>Allotted - Work In Progress</option>
                                                <option>Service Completed</option>
                                                <option>Delivery Done</option>
                                                <option>Decision Pending</option>
                                            </select>
                                            
                                            </td>
                                            <td><span class="badge bg-red" onclick="status_update();" style="cursor:pointer;" id="status_edit">Edit</span><button class="badge bg-red" onclick="status_update();" style="cursor:pointer;display:none;" id="status_update" name="status_update" type="submit">Update</button></td>
                                            </form>
                                            
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Delivery Time</td><td>
                                            <form action="vendor_detail.php?oid=<?php /*echo $oid;*/ ?>" method="POST">
                                            <div>
                                            </div>
                                            <div>
                                            <input type="datetime-local" class="form-control " name="dd_" id="dd_" placeholder="27/07/2014" style="display:none;">
                                            <input type="text" class="form-control " name="dd" id="dd_old" placeholder="<?php/* echo $dd_vendor;*/ ?>" disabled>
                                            </div>
                                            </td>
                                            <td><span class="badge bg-red" onclick="dd_update();" style="cursor:pointer;" id="dd_edit">Edit</span><button class="badge bg-red" name="dd_update" onclick="dd_update();" style="cursor:pointer;display:none;" id="dd_update">Update</button></td>
                                        </tr>
                                        <tr>
                                            <td>16.</td>
                                            <td>Service Price</td><td>
                                            <form action="vendor_detail.php?oid=<?php /*echo $oid;*/ ?>" method="POST">
                                            <div>
                                            </div>
                                            <div>
                                            <input type="text" class="form-control " name="price_upd" id="price_upd" placeholder="Enter Service Price" style="display:none;">
                                            <input type="text" class="form-control " name="price" id="price" placeholder="<?php /*echo $price; */?>- INR" disabled>
                                            </div>
                                            
                                            </td>
                                            <td><span class="badge bg-red" onclick="price_update();" style="cursor:pointer;" id="price_edit">Edit</span><button class="badge bg-red" name="price_update" onclick="price_update();" style="cursor:pointer;display:none;" id="price_update">Update</button></td>
                                            </form>
                                        </tr>
                                        <tr>
                                         <td>17.</td>
                                         <td>
                                                Please select invoice pdf
                                                </td><td>
                                                <form enctype="multipart/form-data" action="upload.php" method="post">
                                                <input type="hidden" name="MAX_FILE_SIZE" value=1000000>
                                                <input type="hidden" name="completed" value=1>
                                                <input type="file" name="imagefile"><br>
                                                The filename of that invoice on server after upload will be: <h4><?php /*echo $oid;*/  ?>.pdf</h4> <input name="whatsit" value="<?/*php echo $oid; */ ?>"  type="hidden"><br>
                                                <input type="submit" name="submit_file" value=" Upload File "></form>
                                            </td>
                        
                                        </div>
                    </td>
                    </tr>
                                        <tr>
                                            <td>18.</td>
                                            <td>Service Advice</td><td>
                                            <form action="vendor_detail.php?oid=<?php /*echo $oid;*/ ?>" method="POST">
                                            <div>
                                            </div>
                                            <div>
                                            <input type="text" class="form-control " name="advice_upd" id="advice_upd" placeholder="Enter Service Advice" style="display:none;">
                                            <input type="text" class="form-control " name="advice" id="advice" placeholder="<?php /*echo $serv_adv;*/ ?>" disabled>
                                            </div>
                                           
                                            </td>
                                            <td><span class="badge bg-red" onclick="advice_update();" style="cursor:pointer;" id="advice_edit">Edit</span><button class="badge bg-red" name="advice_update" onclick="advice_update();" style="cursor:pointer;display:none;" id="advice_update">Update</button></td>
                                             </form>
                                        </tr>
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
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="js/AdminLTE/demo.js" type="text/javascript"></script>
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
    var source = new EventSource("http://rakeshvaddadi.com/docs/profile/notif_sse.php");
    
    source.onmessage = function(event) {
      
        document.getElementById("notiff").innerHTML = "You have "+ event.data + " notifications<br>";
    };
} else {
    document.getElementById("notiff").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>

<script type="text/javascript">

if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("http://rakeshvaddadi.com/docs/profile/notiffIcon.php");
    
    source.onmessage = function(event) {
      
        document.getElementById("notiffIcon").innerHTML = event.data;
    };
} else {
    document.getElementById("notiffIcon").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>

<script type="text/javascript">

if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("http://rakeshvaddadi.com/docs/profile/notiflist_sse.php");
    
    source.onmessage = function(event) {
      
        document.getElementById("notifli").innerHTML =  event.data ;
    };
} else {
    document.getElementById("notifli").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>
<script type="text/javascript">

if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("http://rakeshvaddadi.com/docs/profile/notiflist_feed.php");
    
    source.onmessage = function(event) {
      
        document.getElementById("feedli").innerHTML =  event.data ;
    };
} else {
    document.getElementById("feedli").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>
<script type="text/javascript">

if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("http://rakeshvaddadi.com/docs/profile/notif_feed.php");
    
    source.onmessage = function(event) {
      
        document.getElementById("feednoti").innerHTML = "You have "+ event.data + " notifications<br>";
        document.getElementById("feednum").innerHTML =  event.data ;
    };
} else {
    document.getElementById("notiff").innerHTML = "Sorry, your browser does not support server-sent events...";
}
</script>
        <script type="text/javascript">
           function status_update(){
            
            if(document.getElementById('status').disabled){
                document.getElementById('status').disabled=false;
            document.getElementById('status_edit').style.display="none";
            document.getElementById('status_upd').style.display="block";
            document.getElementById('status').style.display="none";
            document.getElementById('status_update').style.display="block";
            }
            else{
            document.getElementById('status').disabled=true;
            document.getElementById('status_edit').style.display="block";
            document.getElementById('status').style.display="block";
            document.getElementById('status_upd').style.display="none";
            document.getElementById('status_update').style.display="none";}
           }
           function dd_update(){
            
            if(document.getElementById('dd_old').disabled && document.getElementById('dd_').style.display=="none"){
                document.getElementById('dd_').style.display="block";
                document.getElementById('dd_old').style.display="none";
            document.getElementById('dd_edit').style.display="none";
            document.getElementById('dd_update').style.display="block";
            }
            else{
                document.getElementById('dd_').style.display="none";
                document.getElementById('dd_old').style.display="block";
            document.getElementById('dd_edit').style.display="block";
            document.getElementById('dd_update').style.display="none";}
           }
           function price_update(){
            
            if(document.getElementById('price').disabled && document.getElementById('price_upd').style.display=="none"){
                document.getElementById('price_upd').style.display="block";
                document.getElementById('price').style.display="none";
            document.getElementById('price_edit').style.display="none";
            document.getElementById('price_update').style.display="block";
            }
            else{
                document.getElementById('price_upd').style.display="none";
                document.getElementById('price').style.display="block";
            document.getElementById('price_edit').style.display="block";
            document.getElementById('price_update').style.display="none";}
           }
           function advice_update(){
            
            if(document.getElementById('advice').disabled && document.getElementById('advice_upd').style.display=="none"){
                document.getElementById('advice_upd').style.display="block";
                document.getElementById('advice').style.display="none";
            document.getElementById('advice_edit').style.display="none";
            document.getElementById('advice_update').style.display="block";
            }
            else{
                document.getElementById('advice_upd').style.display="none";
                document.getElementById('advice').style.display="block";
            document.getElementById('advice_edit').style.display="block";
            document.getElementById('advice_update').style.display="none";}
           }
        </script>
    </body>
</html>
<?php   
  if(isset($_POST['status_update'])){
    $os = $_POST['status'];
    $query1 = "UPDATE vendor_order SET order_status='$os' WHERE O_ID='$oid'";
    $query_result = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());
    print '<script type="text/javascript">';
print 'alert("Status Updated successfully")';
print '</script>';

$query2 = "SELECT * FROM vendor_order WHERE O_ID='$oid'";
    $query_result1 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
    $results = mysql_fetch_array($query_result1);

    $odd = $results['order_dd'];
    if($odd == "0000-00-00 00:00:00")
      {  $odd = "To be Updated";}
$query3 = "SELECT * FROM price WHERE O_ID='$oid'";
    $query_result2 = mysql_query($query3,$con)
    or die("Invalid query: " . mysql_error());
    $p = mysql_fetch_array($query_result2);
    if(!($p['service_price']))
    {
        $pr = "To Be Updated";
    }
    else
    $pr = $p['service_price']."INR"; 

$msg = "Order ID :".$oid.",Order Status :".$results['order_status'].",Expected Date :".$odd.",Service Price :".$pr;
$custMsg = urlencode($msg);
$hitMsg = "https://control.msg91.com/api/sendhttp.php?authkey=69509ADEgkbWLb53bfb0d0&mobiles=".$phone."&message=".$custMsg."&sender=RMHERO&route=4";
$m = file_get_contents($hitMsg);
sendmsg($msg,$results['email']);
echo $hitMsg;
  /* $HTML =<<< HTML

<script type="text/javascript">
alert("$hitMsg");
</script>

HTML;
print $HTML; */

$HTML =<<< HTML

<script type="text/javascript">
window.location.replace("http://rakeshvaddadi.com/docs/profile/vendor_detail.php?oid=$oid");
</script>

HTML;
print $HTML;

  }
    if(isset($_POST['dd_update'])){
    $dd__ = $_POST['dd_'];
    $query1 = "UPDATE vendor_order SET order_dd='$dd__' WHERE O_ID='$oid'";
    $query_result = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());
    print '<script type="text/javascript">';
print 'alert("Deadline Updated successfully")';
print '</script>'; 
$query2 = "SELECT * FROM vendor_order WHERE O_ID='$oid'";
    $query_result1 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
    $results = mysql_fetch_array($query_result1);

    $odd = $results['order_dd'];
    if($odd == "0000-00-00 00:00:00")
      {  $odd = "To be Updated";}
$query3 = "SELECT * FROM price WHERE O_ID='$oid'";
    $query_result2 = mysql_query($query3,$con)
    or die("Invalid query: " . mysql_error());
    $p = mysql_fetch_array($query_result2);
    if(!($p['service_price']))
    {
        $pr = "To Be Updated";
    }
    else
    $pr = $p['service_price']."INR"; 

/*$msg = "Order ID :".$oid.",Order Status :".$results['order_status'].",Expected Date :".$odd.",Service Price :".$pr;
$custMsg = urlencode($msg);
$hitMsg = "https://control.msg91.com/api/sendhttp.php?authkey=69509ADEgkbWLb53bfb0d0&mobiles=".$phone."&message=".$custMsg."&sender=RMHERO&route=4";
$m = file_get_contents($hitMsg);
echo $hitMsg;*/
 $HTML =<<< HTML

<script type="text/javascript">
window.location.replace("http://rakeshvaddadi.com/docs/profile/vendor_detail.php?oid=$oid");
</script>

HTML;
print $HTML;
  }
  if(isset($_POST['price_update'])){
    $price_upd = $_POST['price_upd'];
    $query1 = "UPDATE price SET service_price='$price_upd' WHERE O_ID='$oid'";
    $query_result = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());
    print '<script type="text/javascript">';
print 'alert("Price Updated successfully")';
print '</script>';
$query2 = "SELECT * FROM vendor_order WHERE O_ID='$oid'";
    $query_result1 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
    $results = mysql_fetch_array($query_result1);

    $odd = $results['order_dd'];
    if($odd == "0000-00-00 00:00:00")
      {  $odd = "To be Updated";}
$query3 = "SELECT * FROM price WHERE O_ID='$oid'";
    $query_result2 = mysql_query($query3,$con)
    or die("Invalid query: " . mysql_error());
    $p = mysql_fetch_array($query_result2);
    if(!($p['service_price']))
    {
        $pr = "To Be Updated";
    }
    else
    $pr = $p['service_price']."INR"; 

/*$msg = "Order ID :".$oid.",Order Status :".$results['order_status'].",Expected Date :".$odd.",Service Price :".$pr;
$custMsg = urlencode($msg);
$hitMsg = "https://control.msg91.com/api/sendhttp.php?authkey=69509ADEgkbWLb53bfb0d0&mobiles=".$phone."&message=".$custMsg."&sender=RMHERO&route=4";
$m = file_get_contents($hitMsg);
echo $hitMsg;*/
 $HTML =<<< HTML

<script type="text/javascript">
window.location.replace("http://rakeshvaddadi.com/docs/profile/vendor_detail.php?oid=$oid");
</script>

HTML;
print $HTML; 
  }
  if(isset($_POST['advice_update'])){
    $advice_upd = $_POST['advice_upd'];
    $query1 = "UPDATE vendor_order SET serv_adv='$advice_upd' WHERE O_ID='$oid'";
    echo $query1;
    $query_result = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());
    print '<script type="text/javascript">';
print 'alert("Advice Updated successfully")';
print '</script>'; 
   $HTML =<<< HTML

<script type="text/javascript">
window.location.replace("http://rakeshvaddadi.com/docs/profile/vendor_detail.php?oid=$oid");
</script>

HTML;
print $HTML;
  }

?>
