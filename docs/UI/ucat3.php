<?php
if (!session_id()) session_start();
//changed 
if(isset($_SESSION['uid'])){
$uid=$_SESSION['uid'];
$uname=$_SESSION['name'];
}else{
session_destroy();
header('location: logout.php',true,303);
}
require_once("../../includes/db/connection.php"); ?>

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
        <link href="../../styles/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../../styles/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="../../styles/css/jQueryUI/jquery-ui.css">
    </head>
    <body class="skin-blue" style="overflow:hidden">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="http://rishihero.heromotocorpdealers.com/HMC/Default.aspx/" target="_blank" class="logo">
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
                                <i class="fa fa-envelope"></i><!--feed change-->
                                <span class="label label-success" id="feednum">1</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 1 message</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="../../styles/img/avatar3.png" class="img-circle" alt="User Image"/>
                                                </div>
                                                <h4>
                                                    Wanna Make it more Easy?
                                                    <small><i class="fa fa-clock-o"></i> 2 mins</small>
                                                </h4>
                                                <p>Why not you Register?</p>
                                            </a>
                                        </li><!-- end message -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                       
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Guest <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="../../styles/img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        MotoRevive
                                        <small>Service Springs here..</small>
                                    </p>
                                </li>
                            
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="login.php" class="btn btn-default btn-flat">Login</a><!-- Changed -->
                                    </div>
                                    <div class="pull-right">
                                        <a href="register.php" class="btn btn-default btn-flat">Register</a><!-- Changed -->
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
                            <p>Hello, Guest</p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                     <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>Order</span>
                            </a>
                        </li>
                        <li>
                            <a href="contact.php" target="_blank"><!-- Changed -->
                                <i class="fa fa-envelope"></i> <span>Contact Us</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Register/Login</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="login.php"><i class="fa fa-angle-double-right"></i> Login</a></li><!-- Changed -->
                                <li><a href="register.php"><i class="fa fa-angle-double-right"></i> Register</a></li><!-- Changed -->
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
                        MotoRevive
                        <small>Guest Order</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>MotoRevive</a></li>
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
                                <div class="form-group" style="margin-left:15px"> 
                                         <label >Service Type :</label>
                                            <select style="margin-left:10px"class="target" id="ser">
                                                <option value="option1" selected="selected">Normal</option>
                                                <option value="option2">Emergency</option>
                                              </select>
                                        </div>
                                         <div style="clear:both;font-style:italic;color:#a7a7a7;margin-left:15px" >#Select Emergency service ,only if it is an onroad repair!!
                                        </div>
                                        <div style="clear:both;font-style:italic;color:rgb(143, 63, 63);;display:none;margin-left:15px" id="emerNote" >#Emergency service is available only from 9am to 9pm!!
                                        </div>
                                <div class="box-body table-responsive" id="shwRumTable">
                                
                                        
                                          
                                        <div class="checkbox" style="margin-left:0px">
                                            <label>
                                                <input type="checkbox" name="pickUp" checked="true">Show only NearBy Service-Centres
                                            </label>
                                        </div>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                               <th>Select</th>
                                                <th>Service Provider</th>
                                                <th>Rating</th>
                                                <th>Address</th>
                                                <th>Amenities</th>
                                                <th>Service Price</th>
                                                <th>PickUp Charges</th>
                                            </tr>
                                        </thead>
                                        <tbody id="det_tab">
                                        <tr>
                                               <th><input type="radio" name="serType" id="" value="Free"></th>
                                                <th>Rishi Hero</th>
                                                <th>Good</th>
                                                <th>Thubarahalli, Whitefield, sasdasdasdasdasdasd, asdasdasdasd, asdassdasdasdasdasdasdasdasd</th>
                                                <th>Free PickUp, GoodLife Membership</th>
                                                <th>1500 INR</th>
                                                <th>50 INR</th>
                                            </tr>
                                             <tr>
                                               <th><input type="radio" name="serType" id="" value="Free"></th>
                                                <th>Kaveri Motors</th>
                                                <th>Good</th>
                                                <th>Marathahalli,Whitefield</th>
                                                <th>Free WaterWash for Next Service</th>
                                                <th>1700 INR</th>
                                                <th>70 INR</th>
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                  <th>Select</th>
                                                <th>Service Provider</th>
                                                <th>Rating</th>
                                                <th>Address</th>
                                                <th>Amenities</th>
                                                <th>Service Price</th>
                                                <th>PickUp Charges</th>                                             </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-body">
                                    <div class="form-group">
                                            <label for="exampleInputPassword1">Name<span class="error" id="usrn">*</span></label>
                                            <input type="text" class="form-control half-width" name="username" id="exampleInputPassword1" placeholder="Please enter your full name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Bike Model<span class="error" id="ph">*</span></label>
                                            <input type="text" class="form-control half-width auto" name="phNum" id="tags" placeholder="Start typing your bike model, eg. Avenger" >
                                        </div>

                                        <div class="form-group" > 
                                         <label style="float:left;">Tyre Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :</label>
                                            <select style="margin-left:10px"class="target_">
                                                <option value="option1" selected="selected">Front Tyre</option>
                                                <option value="option2">Back</option>
                                              </select>
                                        </div>
                                         
                                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                                              <script src="../../script/js/jquery-ui-1.10.3.min.js"></script>
                                            <script type="text/javascript">
                                            var flag=1;
                                                      $( ".target" ).change(function() {
                                                        if(flag)
                                                        {
                                                            document.getElementById('shwRumTable').style.display="none";
                                                            document.getElementById('date').style.display="none";
                                                            document.getElementById('addInfo').style.display="none";
                                                            document.getElementById('homePick').style.display="none";
                                                            document.getElementById('emerNote').style.display="block";
                                                            flag=0;
                                                        }
                                                      else
                                                      {
                                                            document.getElementById('shwRumTable').style.display="block";
                                                            document.getElementById('date').style.display="block";
                                                            document.getElementById('addInfo').style.display="block";
                                                            document.getElementById('homePick').style.display="block";
                                                            document.getElementById('emerNote').style.display="none";

                                                            flag=1;
                                                      }
                                                    });
                                            </script>
                                     
                                          
                                       <div class="form_elem"  id="date">
                                        <label>Appointment Date&nbsp;<span class="error" id="adt">*</span></label>
                                        <input type="datetime-local" class="form-control half-width" name="dd" placeholder="27/07/2014" ></br>
                                        </div>
                                        <div class="form-group"   id="addInfo" >
                                            <label for="exampleInputPassword1">Additional Info</label>
                                            <input type="text" class="form-control half-width" name="addInfo" id="exampleInputPassword1" placeholder="Any other Info you would  like to share...">
                                        </div>
                                        <div class="checkbox" style="margin-left:0px" id="homePick">
                                            <label>
                                                <input type="checkbox" name="pickUp"> Need Home Pick-Up
                                            </label>
                                        </div>
                                         <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit Query</button>
                                    </div>
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
         <script src="../../script/js/jquery-ui-1.10.3.min.js"></script>
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
                 var availableTags = [
            "KARIZMA ZMR",
                                                        "KARIZMA",
                                                        "XTREME",
                                                        "HUNK",
                                                        "IMPULSE",
                                                        "ACHIEVER",
                                                        "IGNITOR",
                                                        "GLAMOUR PROGRAMMED FI",
                                                        "GLAMOUR",
                                                        "SUPER SPLENDOR",
                                                        "MAESTRO",
                                                        "PLEASURE",
                                                        "PASSION XPRO",
                                                        "PASSION PRO",
                                                        "SPLENDOR ISMART",
                                                        "SPLENDOR PRO(BLACK ALLOYS)",
                                                        "SPLENDOR PRO",
                                                        "SPLENDOR NXG",
                                                        "SPLENDOR +",
                                                        "HF DELUXE ECO",
                                                        "HF DELUXE",
                                                        "HF DAWN"
            ];
            $( "#tags" ).autocomplete({
              source: availableTags
            });
           
        });
        </script>
    </body>
</html>

    
