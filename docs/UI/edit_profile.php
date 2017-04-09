<?php require_once("../../includes/db/connection.php"); ?>

<?php
if (!session_id()) session_start();
if(isset($_SESSION['uid']))
$uid=$_SESSION['uid'];
//added and changed wherever you find "$uname"
$uname=$_SESSION['name'];

$query1 = "SELECT * FROM user WHERE mobile='$uid'";
    $query1_result = mysql_query($query1,$con)
    or die("Invalid query: " . mysql_error());
    $rw1 = mysql_fetch_array($query1_result);
    $name = $rw1['name'];
    $area = $rw1['area'];
    $email = $rw1['email'];
    $addr = $rw1['address'];
    $pwd = $rw1['pwd'];
?>

    <head>
        <meta charset="UTF-8">
        <title>Rishi Motors - Hero</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../styles/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../../styles/css/ionicons.min.css" rel="stylesheet" type="text/css" />
                <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
        <!-- Morris chart -->
        <link href="../../styles/css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="../../styles/css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="../../styles/css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="../../styles/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="../../styles/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
                <link href="../../styles/css/timepicker/bootstrap-timepicker.min.css" rel="stylesheet"/>
            <link href="../../styles/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
	<!-- Error style Added -->
	<style>
	.error {color: #FF0000;}
	</style>
    </head>
    <body class="skin-blue" style="min-height:768px;">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
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
                       <!--  -->
                      
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php /*echo $uname;*/?><i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                       <?php /*echo $uname;*/?>
                                        <small>Rishi Motor Services</small><!-- Changed -->
                                    </p>
                                </li>
                                <!-- Menu Body -->
                              <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="user_profile.php">Orders</a>
                                    </div>
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
                            <p>Hello, <?php echo $uname;?></p>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li >
                            <a href="uorder.php">
                                <i class="fa fa-dashboard"></i> <span>New Order</span>
                            </a>
                        </li>
                         <li  >
                            <a href="track.php">
                                <i class="fa fa-magnet"></i> <span>Order Status</span>
                            </a>
                        </li>
                        <li>
                            <a href="contact.php" target="_blank">
                                <i class="fa fa-envelope"></i> <span>Contact Us</span>
                            </a>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-user"></i> <span>Profile</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li ><a href="feedback.php" target="_blank"><i class="fa fa-angle-double-right"></i> Feedback</a></li>
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
                        <?php /*echo $uname;*/?>
                        <small>Profile Details</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Edit Profile</li>
                    </ol>
                </section>

                <!-- Main content -->
                 <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Edit Profile Details</h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action ="edit_profile.php" method="POST">
                                    <div class="box-body">
                                      
                                            <a href="#" onclick="getBox();">Update Password</a>
                                            <div id="activity_name"></div>
                                            <script type="text/javascript">
                                            function getBox() { // Call to ajax function
                                                //var prjct_name = $('#prjct_name').val();
                                                var dataString = "prjct_name";
                                                $.ajax({
                                                    type: "POST",
                                                    url: "update.php", // Name of the php files
                                                    data: dataString,
                                                    success: function(html)
                                                    {
                                                        $("#activity_name").html(html);
                                                    }
                                                });
                                            }
                                            </script>
                                    </div><!-- /.box-body -->
                                    
                                </form>
                            </div><!-- /.box -->
                             <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Order Details of   - </h3>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">

                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 200px">Index</th>
                                            <th>Details</th>
                                            
                                          
                                        </tr>
                                         <form action="edit_profile.php" method="post">
                                        <tr>
                                            <td>1.</td>
                                            <td>Name</td>
                                            <td><input type="text" name="name" value='<?php  echo $name; ?>' id="uname" disabled>
                                                
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>E-mail</td>
                                            <td><input type="text" name="email" value='<?php  echo $email; ?>' id="email" disabled>
                                                
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Address</td>
                                            <td><input type="text" name="addr" value='<?php  echo $addr; ?>' id="addr" disabled>
                                                
                                            </td>
                                            
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Area</td>
                                            <td><input type="text" name="area" value='<?php  echo $area; ?>' id="area" disabled>
                                                
                                            </td>
                                            
                                        </tr>
                                        <tr><td></td><td><radioButton onclick="changein();"><a>Edit</a></td>
                                            <script type="text/javascript">
                                           
                                            function changein() { 
                                                document.getElementById("savebtn").disabled=false;
                                                document.getElementById("uname").disabled=false;
                                                document.getElementById("addr").disabled=false;
                                                document.getElementById("area").disabled=false;
                                                document.getElementById("email").disabled=false;
                                            }     
                                            </script>
                                            <td><button type="submit" class="btn bg-olive btn-block" id="savebtn" name="save" disabled>Update</td>
                                            
                                        </tr>
                                    </form>
                                        <tr>
                                                <form action="edit_profile.php" method="post">
                                            <td>5.</td>
                                            <td>Password</td>
                                            <td>Old password
                                                <input type="password" name="oldpwd" id="oldpwd" ><br>
                                                New Password
                                                <input type="password" name="newpwd" id="newpwd" >
                                            </td>
                                        </tr>
                                            <tr><td></td><td></td>
                                            <td><button type="submit" class="btn bg-olive btn-block" name="pwdchange">Change</a></td>

                                        </tr>
                                    </form>
                                    </table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            </div>
                   
                            <div class="col-md-6">
                            <!-- general form elements disabled -->
                            <div class="box box-primary">
                              <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title">Info Details</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="../../img/hero_cover.png" alt="First slide"  style="width:600px;height:300px;"><!-- Changed -->
                                                <div class="carousel-caption">
                                                    <h4 style="color: #Fff;">Welcome</h4><!-- Changed -->
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="../../img/goodlife.jpg" alt="Second slide" style="width:600px;height:300px;"><!-- Changed -->
                                                <div class="carousel-caption">
                                                    <h4 style="color: #Fff;">Hero's GoodLife</h4><!-- Changed -->
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="../../img/hero_latest3.jpg" alt="Third slide" style="width:600px;height:300px;"><!-- Changed -->
                                                <div class="carousel-caption">
                                                   <h4 style="color: #Fff;"> What's New ?</h4><!-- Changed -->
                                                </div>
                                            </div>
                                             <div class="item">
                                                <img src="../../img/hero_cover1.jpg" alt="Third slide" style="width:600px;height:300px;"><!-- Changed -->
                                                <div class="carousel-caption">
                                                   <h4 style="color: #Fff;"> What's New ?</h4><!-- Changed -->
                                                </div>
                                            </div>
                                        </div>
                                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <!-- Info box -->
                            <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Home Pick-Up Service</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p><!-- Changed -->
                                        Rishi Motors offers Home Pick-Up Service on charge basis with respect to the distance(in Kms) ranging from 0-15km on a charge range of (70-150 INR).
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                            <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Hero's GoodLife Program</h3><!-- Changed -->
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p><!-- Changed -->
                                       The Hero MotoCorp GoodLife Program is designed to compliment your good life in every way. It brings you an easy to use privilege card packed with special rewards and benefits. And it doesn’t end here. It also provides you with a free riders’ insurance worth 1 Lakh to ensure your peace of mind. What’s more, your Hero MotoCorp GoodLife Program membership rewards you with points on all your spends. So make the best use of your card and redeem your points for fabulous rewards!
                                        <br>For More details, visit <a href="http://goodlife.heromotocorp.com/goodlife_main.aspx" style="text-decoration:underline">GoodLife - Hero</a>
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                               
                              <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Hero Login</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <p>
                                        Your Order ID will be sent to your mobile ,once you submit the Order request.Please Login with your Mobile number as the Login ID and Order ID as the Password(Intial Login). Change your password once you login for the first time. </br>Hurray! Your Registration is Done &nbsp;:-) </br>Next time onwards, you can place the service order from your profile directly.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                                    </form>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!--/.col (right) -->
                    </div>
                   </section>     
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="../../script/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="../../script/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="../../script/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="../../script/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="../../script/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="../../script/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="../../script/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="../../script/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="../../script/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../../script/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../../script/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="../../script/js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../../script/js/AdminLTE/dashboard.js" type="text/javascript"></script>     
        
    
    </body>
<?php
if(isset($_POST['pwdchange'])){
    $query = "SELECT * FROM user where mobile='".$uid."'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
   $rw1 = mysql_fetch_array($query_result);
   if($rw1['pwd']==$_POST['oldpwd']){
 echo '<script type="text/javascript">alert("Password match");</script>';
    $query = "Update user set pwd='".$_POST['newpwd']."' where mobile='".$uid."'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    
   }elseif($_POST['oldpwd']=="" or $_POST['newpwd']==""){
    
    echo '<script type="text/javascript">alert("Please enter both Old and New Password");</script>';
   
   }else{
   
    echo '<script type="text/javascript">alert("Invalid Password");</script>';
   
   }

}
if(isset($_POST['save'])){

    $query = "Update user set name='".$_POST['name']."',area='".$_POST['area']."',address='".$_POST['addr']."',email='".$_POST['email']."'  where mobile='".$uid."'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    header(':edit_profile.php');
}
?>

