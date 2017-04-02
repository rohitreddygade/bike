<!DOCTYPE html>
<?php 
session_start();
require_once("../../includes/db/connection.php"); 
if(isset($_POST['submitDet'])){ 
            $sid=substr ($_POST['slot'],0,strpos($_POST['slot'],"_"));
            $exp_apt=substr ($_POST['slot'],strpos($_POST['slot'],"_")+1);}
    ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MotoRevive</title>

    <link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/ico">
    <link href="../../styles/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link rel="../../stylesheet" href="styles/css/jQueryUI/jquery-ui.css">
    <link href="../../styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/css/style.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/css/custom-jquery.css" rel="stylesheet" type="text/css" />
    <link href="../../styles/css/ionicons.min.css" rel="stylesheet" type="text/css" />
      <link href="../../styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../../styles/css/jQueryUI/jquery-ui.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
</head>

<body class="skin-blue" >

    <header class="header">
        <a href="index.php" target="_blank" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            MotoRevive
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top " role="navigation">
            <!-- Sidebar toggle button-->
           
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-sign-in"></i>
                            <span>Login<i class="caret"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue" style="height:70px;">
                                <!-- <img src="styles/img/avatar3.png" class="img-circle" alt="User Image" /> -->
                                <p>
                                    MotoRevive
                                    <small>Let your Vehicle Revive..</small>
                                </p>
                            </li>
                            
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="docs/UI/login.php" target="_blank" class="btn btn-default btn-flat">Login</a><!-- Changed -->
                                </div>
                                <div class="pull-right">
                                    <a href="docs/UI/register.php" target="_blank" class="btn btn-default btn-flat">Register</a><!-- Changed -->
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-earphone"></i>
                            <span>080- 42296199</span>
                        </a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="docs/UI/feedback.php" target="_blank">
                            <i class="glyphicon glyphicon-bullhorn"></i>
                            <span>Feedback</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper row-offcanvas row-offcanvas-left center" >
            <!-- Left side column. contains the logo and sidebar -->
            

            <!-- Right side column. Contains the navbar and content of the page -->
            
                <!-- Content Header (Page header) -->
                <section class="content-header" style="padding-lefT:18%">
                    <h1>
                    India's First Online Bike Service Booking</br> 
                        <small style="padding-left:12%">..&nbsp;Revive your vehicles through MotoRevive&nbsp;..</small>
                    </h1>
                </section>
               
                <!-- Main content -->
                <section class="content" style="border: 1px solid #ddd;margin-bottom:2%">
                        <div class="filterBYContainer">
                        <div style="clear: both;"></div>
                        <h4>Congratulations, Your Service Order of <i style="color:green">Order ID : 1408123885 </i>has been successfully sent to Rakesh Motors, Your time slot is <i style="color:green">11:00 am </i>on <i style="color:green">Monday - 20/10/2014.</i><br><br>Please keep your bike ready by <i style="color:red">10:00 am </i>on the same day, Rakesh Motors' representative will be coming and collecting the bike to revive it.<br><br>Cheers,<br>Team - <i style="color:navy">MotoRevive..</i></h4>
                    </div>
                         </div>
 
                    <div class="footer">

    <div class="divider" style="border-top: 1px solid #ddd;"></div>
    <div class="center">
    <div class="links clearfix" >
         <div class="col-md-3">
            <div class="menu-links left">
                <div class="col">
                    <div class="menu-title">Help</div>
                    <!--<div><a href="#">Payments</a></div>-->
                    <div><a href="/ty2/ticket/cancel">Cancellations</a></div>
                    <div><a href="/ty2/ticket/refund">Refund</a></div>
                    <!--<div><a href="#">FAQ</a></div>-->
                </div>
                
            </div>
        </div>
         <div class="col-md-3">
            <div class="menu-links left">
                <div class="col">
                    <div class="menu-title">About Us</div>
                    <div><a href="/about-us">What We Do</a></div>
                    <div><a href="/contact-us">Contact Us</a></div>
                    <!--<div><a href="#">Careers</a></div>-->
                    <div><a href="http://blog.travelyaari.com/">Travel Blog</a></div>
                    <!--<div><a href="#">Press</a></div>-->
                    <div><a href="/terms-and-conditions">Terms &amp; Conditions</a></div>
                    <div><a href="/privacy">Privacy Policy</a></div>
                </div>
            </div>
        </div>
         <div class="col-md-3">
            <div class="menu-links left">
                <div class="col">
                    <div class="menu-title">Companies</div>
                    <div><a href="/about-us">Hero</a></div>
                    <div><a href="/contact-us">Honda</a></div>
                    <div><a href="/contact-us">Bajaj</a></div>
                    <div><a href="/contact-us">Kawasaki</a></div>
                    <div><a href="/contact-us">KTM</a></div>
                    <div><a href="/contact-us">Royal Enfield</a></div>
                    <div><a href="/contact-us">TVS</a></div>
                </div>
            </div>
        </div>
           <div class="col-md-3">
            <div class="menu-links left">
                <div class="col">
                    <div class="menu-title">Miscellaneous</div>
                    <!--<div><a href="#">Payments</a></div>-->
                    <div><a href="/ty2/ticket/cancel">Partners</a></div>
                    <div><a href="/ty2/ticket/refund">Agent Registration</a></div>
                    <!--<div><a href="#">FAQ</a></div>-->
                </div>
            </div>
        </div>
        </div>
          <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-2 text-center" style="text-align:center;margin-top:2%">
                  <div id="share-buttons">
 
<!-- Facebook -->
<a href="http://www.facebook.com/sharer.php?u=http://bikes.esy.es" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" /></a>
 
<!-- Twitter -->
<a href="http://twitter.com/share?url=http://bikes.esy.es&text=Online Bike Servicing&hashtags=onlineBikeService" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" /></a>
 
<!-- Google+ -->
<a href="https://plus.google.com/share?url=http://bikes.esy.es" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/google.png" alt="Google" /></a> 
<!-- Pinterest -->
<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><img src="http://www.simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" /></a>
 
<!-- StumbleUpon-->
<a href="http://www.stumbleupon.com/submit?url=http://bikes.esy.es&title=Online Bike Service" target="_blank"><img src="http://www.simplesharebuttons.com/images/somacro/stumbleupon.png" alt="StumbleUpon" /></a>
 
<!-- Email -->
<a href="mailto:?Subject=Online Bike Service&Body=I%20saw%20this%20and%20thought%20of%20you!%20 http://bikes.esy.es"><img src="http://www.simplesharebuttons.com/images/somacro/email.png" alt="Email" /></a>
 
</div>
                <div class="top-scroll">
                    <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                </div>
                <hr>
                <p>Copyright &copy; MotoRevive 2014</p>
            </div>
        </div>
    </div>
    </div>

                    </div>

                </section><!-- /.content --> 
</body>
<script src="../../script/js/bootstrap.js"></script>
<script>
    $(function() {

        var icons = {
            header : "mxHelpFilterHeader mxHelpFilterHeaderExapndIcon",
            activeHeader : "mxHelpFilterHeader mxHelpFilterHeaderCollapseIcon"
        };
        $("#accordion1").accordion({
            autoHeight : false,
            navigation : true,
            active : 0,
            animate : 100,
            collapsible : true,
            speed : "slow",
            icons : icons
        });
        $('#accordion1 button').click(function(e) {
        var delta = ($(this).is('.next') ? 1 : -1);
        $( "#accordion1" ).accordion({
            beforeActivate: function(event, ui) {
                var newIndex = $(ui.oldHeader).index('h3');
                for (var i = 0; i <= 2; i++) {
                    if(i!=newIndex+delta){
                     $('#acc' + i).addClass('ui-state-disabled');}
                     else
                     {
                        $('#acc' + i).removeClass('ui-state-disabled');
                     }
                      }        
                
            }
 
        });
        $('#accordion1').accordion('option', 'active', ( $('#accordion1').accordion('option','active') + delta  ));
    });
       /* $("#toggle").button().click(function() {
            if ($("#accordion1").accordion("option", "icons")) {
                $("#accordion1").accordion("option", "icons", null);
            } else {
                $("#accordion1").accordion("option", "icons", icons);
            }
        });
*/
    });
</script>
</html>

