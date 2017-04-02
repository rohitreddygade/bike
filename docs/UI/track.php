<?php require_once("../../includes/db/connection.php"); ?>

<?php
/*if (!session_id()) session_start();
//changed 
if(isset($_SESSION['userid'])){
$uid=$_SESSION['userid'];
$uname=$_SESSION['name'];
}else{
session_destroy();
header('location: logout.php',true,303);
}*/
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
                <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
        <!-- Ionicons -->
        <link href="../../styles/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../../styles/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>
    <?php
    if(isset($_POST['submit_order'])){
/*        $oid = $_POST['orderID'];
        
    
    $query1 = "SELECT * FROM vendor_order WHERE O_ID='$oid'";
    $query3 = "SELECT service_price FROM price WHERE O_ID='$oid'";
    $query1_result = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());
    $query3_result = mysql_query($query3,$con)
    or die("Invalid query: " . mysql_error());
    $rw1 = mysql_fetch_array($query1_result);

    $dd_vendor = $rw1['order_dd'];
    $custID = $rw1['CustID'];
    $Otime = $rw1['order_time'];
    $st = $rw1['ser_type'];
    $sm = $rw1['ser_mode'];
    $sc = $rw1['ser_cat'];
    $cdd = $rw1['dd'];
    $rd = $rw1['req_detail'];
    $addr = $rw1['addr'];
    $addInfo = $rw1['add_info'];
    $phone = $rw1['phone'];
    $email = $rw1['email'];
    $os = $rw1['order_status'];
    $ddd = $rw1['dd'];
    $rw3 = mysql_fetch_array($query3_result);
    $inv_url = $rw1['inv_url'];
    if($dd_vendor == "0000-00-00 00:00:00")
    {    $dd_vendor = "To Be Updated";
    }
    if(!($rw3['service_price']))
    {
        $price = "To Be Updated";
    }
    else
    $price = $rw3['service_price'];  

    }
else{

    
    $query1 = "SELECT * FROM vendor_order WHERE phone='$uid' ORDER BY O_ID DESC";
    $query1_result = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());
        $rw1 = mysql_fetch_array($query1_result);
    $dd_vendor = $rw1['order_dd'];
    $custID = $rw1['CustID'];
    $Otime = $rw1['order_time'];
    $st = $rw1['ser_type'];
    $sm = $rw1['ser_mode'];
    $sc = $rw1['ser_cat'];
    $cdd = $rw1['dd'];
    $rd = $rw1['req_detail'];
    $addr = $rw1['addr'];
    $addInfo = $rw1['add_info'];
    $phone = $rw1['phone'];
    $email = $rw1['email'];
    $os = $rw1['order_status'];
    $ddd = $rw1['dd'];
    $oid = $rw1['O_ID'];
    $inv_url = $rw1['inv_url'];
    $query3 = "SELECT service_price FROM price WHERE O_ID='$oid'";

    $query3_result = mysql_query($query3,$con)
    or die("Invalid query: " . mysql_error());
    if($dd_vendor == "0000-00-00 00:00:00")
    {    $dd_vendor = "To Be Updated";
    }

    $rw3 = mysql_fetch_array($query3_result);
        if(!($rw3['service_price']))
    {
        $price = "To Be Updated";
    }
    else
    $price = $rw3['service_price']; */
}
    ?>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="http://rishihero.heromotocorpdealers.com/HMC/Default.aspx" class="logo" target="_blank">
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
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                    <?php  ?> User
                                        <small>Hero Services</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="edit_profile.php" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
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
                            <p>Hello, <?php?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                  <ul class="sidebar-menu">
                        <li >
                            <a href="uorder.php">
                                <i class="fa fa-dashboard"></i> <span>New Order</span>
                            </a>
                        </li>
                         <li  class="active">
                            <a href="track.php">
                                <i class="fa fa-magnet"></i> <span>Order Status</span>
                            </a>
                        </li>
                        <li>
                            <a href="contact.php" target="_blank">
                                <i class="fa fa-envelope"></i> <span>Contact Us</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Profile</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="feedback.php" target="_blank"><i class="fa fa-angle-double-right"></i> Feedback</a></li>
                                <li><a href="edit_profile.php"><i class="fa fa-angle-double-right"></i>Edit Profile</a></li>
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
                        <?php ?>
                        <small>Order Details</small>
                    </h1>
                    <ol class="breadcrumb">
<!--changed-->                        <li><i class="fa fa-dashboard"></i> Rishi Motors</li>
<!--changed-->                        <li>Dashboard</li>
                        <li class="active">Customer Order Details</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-xs-12">    
                            <form action="user_profile.php?userid=<?php ?>" method="POST">                        
                           <select class="form-control" id="status_upd"  name="orderID" style="width:30%;text-align: center;
                                margin-top: -5px;float: left;">
                                <?php

                               /* $query = "SELECT * FROM vendor_order WHERE phone='$uid' ORDER BY O_ID DESC";
                                $query_result = mysql_query($query)
                                or die("Invalid query: " . mysql_error());
                                while($values = mysql_fetch_array($query_result))
                                {
                                    ?>
                                        <option value="<?php echo $values['O_ID']; ?>"> <?php echo($values['O_ID']); ?> </option>
                                    <?php
                                }*/
                                ?>
                          </select>
                            <button type="submit" name="submit_order" style="margin-left:10px;margin-bottom: 10px;" class="btn btn-primary btn-sm">View Order Status/Details</button>
                            </form>
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Order Details of   - <?php /*echo $uname."   ,"; echo "  Order ID :".$oid;*/ ?></h3>
                                    <div style="float:right;"> 
                                    <button class="btn btn-info" data-toggle="modal" style="margin:10px 5px 5px 5px;" data-target="#loginModal">Rate the Service</button>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Rate the Service</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="loginForm" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Service Quality  :</label>
                        <div class="col-md-5">
                           <div id="serRating1" type="number" class="rating" style=""></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">Punctuality :</label>
                        <div class="col-md-5">
                           <div id="serRating2" type="number" class="rating" style=""></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Customer Support:</label>
                        <div class="col-md-5">
                           <div id="serRating" type="number" class="rating" style=""></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Feedback :</label>
                        <div class="col-md-5">
                            <textarea   class="form-control" ></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-5 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div></div>
        </div>
    </div>
</div>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">

                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 200px">Index</th>
                                            <th>Details</th>
                                          
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Order ID</td>
                                            <td>
                                                <?php  /*echo $oid*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Customer Name</td>
                                            <td>
                                                <?php  /*echo $uname*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Ordered On</td>
                                            <td>
                                                 <?php /* echo $Otime*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Service Type</td>
                                            <td>
                                                <?php  /*echo $st*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Service Mode</td>
                                            <td>
                                                <?php  /*echo $sm*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Service</td>
                                            <td>
                                                <?php  /*echo $sc*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Customer Deadline</td>
                                            <td>
                                                <?php  /*echo $cdd*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Request Detail</td>
                                            <td>
                                                <?php  /*echo $rd*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Address</td>
                                            <td>
                                            <?php /* echo $addr*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Other  Info</td>
                                            <td>
                                                <?php  /*echo $addInfo*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Mobile No.</td>
                                            <td>
                                                <?php  /*echo $phone*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>e-mail ID</td>
                                            <td>
                                                <?php  /*echo $email*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Status</td>
                                            <td>
                                                <?php  /*echo $os*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Delivery Time</td><td>
                                            <?php  /*echo $dd_vendor*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Service Price</td><td>
                                           <?php  /*echo $price*/ ?>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td>16.</td>
                                            <td>Invoice</td><td>
                                            <?php  /*echo "<a href='$inv_url' target='_blank'>Invoice</a>";*/ ?>
                                            </td>
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
        <script src="../../script/js/bootstrap.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <!-- AdminLTE App -->
        <script src="../../script/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
         <script src="../../script/js/jquery-ui-1.10.3.min.js"></script>
        <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
                <script src="../../script/js/star-rating.js"></script>
         <script src="../../script/js/jquery.raty.js"></script>
         <script src="../../script/js/bootstrap.js"></script>
            <script type="text/javascript">
                $(document).ready(function() {
    $('#loginForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    }
                }
            }
        }
    });
      
});
          $('#serRating').raty({
});
          $('#serRating1').raty({
});
          $('#serRating2').raty({
});
            </script>>

    </body>
</html>
