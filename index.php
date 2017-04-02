<!DOCTYPE html>
<html lang="en">
<?php
require_once("includes/db/connection.php");
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MotoRevive</title>
    <link rel="shortcut icon" href="/img/icons/favicon.ico" type="image/ico">
    <link href="styles/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="styles/css/style.css" rel="stylesheet" type="text/css" />
    <link href="styles/css/ionicons.min.css" rel="stylesheet" type="text/css" />
      <link href="styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="styles/css/jQueryUI/jquery-ui.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

</head>
<script>
    function bikelist(company)
    {

        var xmlhttp;
        if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        document.getElementById("bikediv").innerHTML=xmlhttp.responseText;
        checkfield();
    }
}
xmlhttp.open("GET","docs/Service/bikelist.php?company="+company,true);
xmlhttp.send();
}


</script>
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
                    <li class="dropdown user user-menu" style="font-size:16px">
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
                    <li class="dropdown user user-menu" style="font-size:16px">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="glyphicon glyphicon-earphone"></i>
                            <span>080- 42296199</span>
                        </a>
                    </li>
                    <li class="dropdown user user-menu" style="font-size:16px">
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
                   <!--  <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Forms</a></li>
                        <li class="active">General Elements</li>
                    </ol>  -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row" style="">
                        <!-- left column -->
                        <div class="col-md-6" style="width:600px;">
                            <!-- general form elements -->
                            <div class="boxShadow">
                                <div class="box-header">
                                    <!-- <h3 class="box-title">Quick Example</h3> -->
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form" action ="docs/Service/choice.php" method="POST">
                                    <div class="box-body">
                                        <div class="col-xs-12" >
                                        <div class="form-group" style="">
                                            <label for="exampleInputPassword1">Your Location<!--Added--><span class="error" >*</span></label>
                                            <input type="text" class="form-control" onchange="checkfield();" name="area" id="area" placeholder="Start typing your area eg. Domlur">
                                        </div>
                                    </div>
                                    <div class="col-xs-6" >
                                        <div class="form-group" style="">
                                            <label>Service Category<!--Added--><span class="error" id="scat">*</span></label>
                                            <select class="form-control" onchange="checkfield();" name="servicetype" id="stype">
                                                <option selected="true">--Select--</option>
                                                <option value="Periodic Servicing">Periodic Servicing</option>
                                                <option value="Repair">Repair</option>
                                                <option value="Query">Query</option>
                                                <option value="Insurance">Request for Insurance Renewal</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-6" >
                                        <div class="form-group" style="">
                                            <label style="">Appointment Date&nbsp;<span class="error" id="adt">*</span></label>
                                            <p >
                                                <input type="text" onchange=""  id="datepicker" class="form-control dpDate" name="date_" readonly='true' 
                                                style="background-color:#fff;cursor:pointer;"placeholder="eg.:27/07/2014"></p>
                                           </div>
                                        </div>
                                        <div class="col-xs-6 " >
                                            <div class="form-group" style="">
                                             <label>Bike Company<span class="error" id="scat">*</span></label>
                                             <select class="form-control" id="company" name="company" onchange="bikelist(this.value)">
                                                 <option value="">--Select--</option>
                                                 <option value="Bajaj">Bajaj</option>
                                                 <option value="Hero">Hero</option>
                                                 <option value="Honda">Honda</option>
                                                 <option value="TVS" >TVS</option>
                                                 <option value="Enfield" >Royal Enfield</option>
                                                 <option value="Yamaha" >Yamaha</option>
                                                 <option value="Suzuki" >Suzuki</option>
                                                 <option value="KTM" >KTM</option>
                                             </select>
                                         </div>
                                     </div>
                                     <div class="col-xs-6 " >
                                        <div class="form-group" style="">
                                         <label>Bike Model<span class="error" id="bikename">*</span></label>
                                         <select class="form-control" id="bikediv" onchange="checkfield();" name="model">
                                         <option value="">--Select--</option>
                                       </select>
                                   </div>
                               </div>
                                    </div><!-- /.box-body -->
                                      <div class="box-footer" style="margin-left:40%">
                                    <button type="submit" name="submitform" id="submit" class="btn btn-primary" style="margin:5px 0px 0px 15px;" disabled>Book A Service</button>
                                </div>
                                </form>
                            </div><!-- /.box -->
                        </div><!--/.col (left) -->
                        <!-- right column -->
                        <div class="col-md-6" style="width:360px;margin-top:-25px">
               <div class="slidebox">
                  <div class="box box-solid" style="
    border: 1px solid #ccc;  border-radius: 3px;  box-shadow: 0 0 10px #ccc;  
    padding: 0px 1px 1px;  position: relative;  
    /* background: #ffffff; */  border-top: 2px solid #c1c1c1;  
    /* margin-bottom: 20px; */  -webkit-border-radius: 3px;  -moz-border-radius: 3px;  width: 100%;
">
                    <div class="box-body" style="padding:0px !important;">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="styles/img/1.jpg" alt="First slide"  style="width:600px;height:317px;"><!-- Changed -->
                                    <div class="carousel-caption">
                                        <h3 style="color: #Fff;font-weight:400">Refresh</h3><!-- Changed -->
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="styles/img/6.jpg" alt="Second slide" style="width:600px;height:317px;"><!-- Changed -->
                                    <div class="carousel-caption">
                                        <h3 style="color: #Fff;">Analyze & Repair</h3><!-- Changed -->
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="styles/img/5.jpg" alt="Third slide" style="width:600px;height:317px;"><!-- Changed -->
                                    <div class="carousel-caption">
                                     <h3 style="color: #Fff;">Assemble</h3><!-- Changed -->
                                 </div>
                             </div>
                             <div class="item">
                                <img src="styles/img/7.jpg" alt="Third slide" style="width:600px;height:317px;"><!-- Changed -->
                                <div class="carousel-caption">
                                 <h3 style="color: #Fff;">Revive</h3><!-- Changed -->
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
    </div><!-- /.box-body -->
</div><!-- /.box -->
                        </div><!--/.col (right) -->
                        
                          <div class="billDetailsMainContainer">
                                <div class="billviewDetailContainer">
                                    <div class="col-md-4" style="">
                                    <div class="detailbox1">
                                        <div class="billHeaderText">Customer Service</div>
                                        <div class="billDetailsContainer">
                                        <div class="billDetailsTextContainer">
                                                 <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    <img src="styles/img/Customer-Service.jpg" alt="First slide"  style="width:245px;height:160px;"><!-- Changed -->
                                                                </div>
                                                         </div>
                                                     </div></br>
                                                <div class="labelValueContainer">
                                                    <div class="billLabelContainer"><a>FAQs</a></div>
                                                <div class="billValueContainer">What is this/that ??</div>
                                                </div>
                                                <div class="labelValueContainer">
                                                    <div class="billLabelContainer"><a>Cancellation</a></div>
                                                <div class="billValueContainer">Booking withdrawls</div>
                                                </div>
                                                <div class="labelValueContainer">
                                                    <div class="billLabelContainer"><a>Refund Status</a></div>
                                                <div class="billValueContainer">Is the money back?</div>
                                                </div>
                                        </div>
                                        </div>
                                    </div>
                                </div><!--/.col (right) -->
                    <div class="col-md-4" style="">
                             <div class="detailbox2">
                                    <div class="detailboxSeparator"></div>
                                    <div class="billHeaderText">Get Us on Mobile</div>
                                    <div class="billDetailsContainer">
                                    <div class="billDetailsTextContainer">
                                             <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    <img src="styles/img/mobile_app_img.png" alt="First slide"  style="width:245px;height:160px;"><!-- Changed -->
                                                                </div>
                                                         </div>
                                                     </div></br>
                                             <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="float:left;">
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    <img src="styles/img/AppleLogo.png" alt="First slide"  style="width:125px;height:55px;"><!-- Changed -->
                                                                </div>
                                                         </div>
                                                     </div>
                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"  style="float:left;">
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    <img src="styles/img/Google-play-logo.png" alt="First slide"  style="width:125px;height:58px;"><!-- Changed -->
                                                                </div>
                                                         </div>
                                                     </div>
                                                 <div class="labelValueContainer"></br>
                                                    <div class="billLabelContainer"><a>Windows App</a></div>
                                                <div class="billValueContainer">Coming soon...</div>
                                                </div>
                                    </div>
                                    </div>
                                </div>  
                    </div><!--/.col (right) -->
                    <div class="col-md-4" style="">
                             <div class="detailbox3">
                                    <div class="detailboxSeparator"></div>
                                    <div class="billHeaderText">Why MotoRevive??</div>
                                    <div class="billDetailsContainer">
                                    <div class="billDetailsTextContainer">
                                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                            <ol class="carousel-indicators">
                                                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                                            </ol>
                                                            <div class="carousel-inner">
                                                                <div class="item active">
                                                                    <img src="styles/img/why-us2.jpg" alt="First slide"  style="width:245px;height:160px;"><!-- Changed -->
                                                                </div>
                                                         </div>
                                                     </div></br>
                                                <div class="labelValueContainer">
                                                    <div class="billLabelContainer" style="width:100%;">Hassle Free Service Booking</div>
                                                <!-- <div class="billValueContainer">What is this/that ??</div> -->
                                                </div>
                                                <div class="labelValueContainer">
                                                      <div class="billLabelContainer" style="width:100%;">Periodic Service Status Updates</div>
                                                <!-- <div class="billValueContainer">What is this/that ??</div> -->
                                                </div>
                                                <div class="labelValueContainer">
                                                      <div class="billLabelContainer" style="width:100%;">Dedicated Customer Care Service</div>
                                                <!-- <div class="billValueContainer">What is this/that ??</div> -->
                                                </div>
                                                 <div class="labelValueContainer">
                                                      <div class="billLabelContainer" style="width:100%;">PickUp /Drop Facility</div>
                                                <!-- <div class="billValueContainer">What is this/that ??</div> -->
                                                </div>
                                    </div>
                                    </div>
                                </div> </div></div>
                    </div><!--/.col (right) -->

                    <div class="footer" style="margin-top:43%">

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
                <p>Copyright &copy; Moto Revive 2014</p>
            </div>
        </div>
    </div>
    </div>

                    </div>

                </section><!-- /.content --> 
                </div><!-- ./wrapper -->
</body>
</html>
<script src="script/js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="script/js/jquery.timepicker.js"></script>
<script src="script/js/bootstrap.js"></script>
<script src="script/js/jquery-1.10.2.js"></script>

<!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
<script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });


</script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
</script>
<?php 
$query = "SELECT distinct area FROM area";
$query_result = mysql_query($query,$con)
or die("Invalid query: " . mysql_error());
$O_row="\"Halarur\"";
while ($rw1=mysql_fetch_array($query_result)) {
    $O_row.=",\"".$rw1['area']."\"";
}
?>
<script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
        $('#datepicker').datepicker({
        'dateFormat': 'DD, d MM, yy',
        'minDate': +2, 'maxDate': "+1M +10D",
        'autoclose': true
    });
        var availableTags = [<?php echo $O_row; ?>];
    $( "#area" ).autocomplete({
      source: availableTags
  });
    $("#bike_company").chained("#bike_model");
    $("#series").chained("#mark");
    });
</script>
<script src="script/js/jquery-1.10.2.js"></script>
<script src="script/js/jquery-ui-1.10.3.min.js"></script>
<script type="text/javascript" src="script/js/jquery.timepicker.js"></script>
<script type="text/javascript" src="script/js/jquery.ui.datepicker.validation.js"></script>


<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script>


  function checkfield(){
    var e1 = document.getElementById("area");
    var e3 = document.getElementById("company");
    var e4 = document.getElementById("bikediv");
    var e5 = document.getElementById("stype");
/*    var e6 = document.getElementById("date_");*/
    var str1 = new Array(5);
    str1[0]  = e1.value;
    str1[1]  = e3.options[e3.selectedIndex].text;
    str1[2]  = e4.options[e4.selectedIndex].text;
    str1[3]  = e5.options[e5.selectedIndex].text;
   /* str1[4]  = e6.value;*/
    var x=0;
    for (i = 0; i < str1.length; i++) { 
     if(str1[i]=="" || str1[i]=="--Select--" || str1[i]=="undefined"){
       x=1;
       

   }
}
if(x==0){
    document.getElementById("submit").disabled = (1==0);
}else{
    document.getElementById("submit").disabled = (1==1);
}

}


</script>


</body>

</html>
<?php
if(isset($_POST['submit'])){ 
    if($_POST['servicing'] == "11" || $_POST['servicing'] == "12" || $_POST['servicing'] == "13"){
        header("location:docs/UI/cat1.php");
    }
    else if($_POST['servicing'] == "21" || $_POST['servicing'] == "22"){
        header("location:docs/UI/cat2.php");
    }
    else if($_POST['servicing'] == "31"){
        header("location:docs/UI/cat3.php");
    }
    else if ($_POST['servicing'] == "41") {
        header("location:docs/UI/cat4.php");
    }
    else{
        print("<script>");
        print("alert('Enter Correct Values');");
        print("</script>");
    }
}
?>
