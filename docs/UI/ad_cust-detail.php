

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
                                <span><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../styles/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                     User
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
                            <img src="../../styles/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                   <ul class="sidebar-menu">
                        <li >
                            <a href="ad_cust-oview.php" >
                                <i class="fa fa-dashboard"></i> <span>Customer Dashboard</span>
                            </a>
                        </li>
                        <li >
                            <a href="ad_ven-oview.php" >
                                <i class="fa fa-dashboard"></i> <span>Vendor Dashboard</span>
                            </a>
                        </li>
                        <li class="active">
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
                        Rakesh Vaddadi<small>Order Details</small>
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
                            <form action="user_profile.php?userid=" method="POST">                        
                           <select class="form-control" id="status_upd"  name="orderID" style="width:30%;text-align: center;
                                margin-top: -5px;float: left;">
                          </select>
                            <button type="submit" name="submit_order" style="margin-left:10px;margin-bottom: 10px;" class="btn btn-primary btn-sm">View Order Status/Details</button>
                            </form>
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Profile Details of #USER</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th style="width: 10px">1.</th>
                                            <th style="width: 200px">Name</th>
                                            <th>Rakesh</th>
                                          
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Mobile</td>
                                            <td>
                                                8123885915
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Email ID</td>
                                            <td>rakhe123kbl@gmail.com
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Location</td>
                                            <td>Whitefield
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Address</td>
                                            <td>Thubarahalli
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Total Orders</td>
                                            <td>6
                                            </td>
                                        </tr>
                                    </table> 
                                    <br>
                                    <div class="box-header">
                                    <h3 class="box-title">Order Details - #orderID</h3>
                                </div><!-- /.box-header -->
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
  
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Customer Name</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Ordered On</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Service Type</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>5.</td>
                                            <td>Service Mode</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>6.</td>
                                            <td>Service</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>7.</td>
                                            <td>Customer Deadline</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>8.</td>
                                            <td>Request Detail</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>9.</td>
                                            <td>Address</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>10.</td>
                                            <td>Other  Info</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>11.</td>
                                            <td>Mobile No.</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>12.</td>
                                            <td>e-mail ID</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Status</td>
                                            <td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Delivery Time</td><td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Service Price</td><td>
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                        <td>16.</td>
                                            <td>Invoice</td><td>
                                            </td>
                                            </tr>
                                         <tr>
                                        <td>17.</td>
                                            <td>Bike Model</td><td>
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
        <script src="../../script/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- DATA TABES SCRIPT -->
        <script src="../../script/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="../../script/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="../../script/js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
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
    </body>
</html>
<?php   



?>
