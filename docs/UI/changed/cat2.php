<?php
 session_start();
if($_SESSION['servicetype']=='Repair' or $_SESSION['servicetype']=='Accidental'){
}elseif($_SESSION['servicetype']=='Insurance' or $_SESSION['servicetype']=='Periodic Servicing' or $_SESSION['servicetype']=='Waterwash Service'){
header('location: cat1.php',true,303);
}else{
  header('location: http://localhost/boss/',true,303);
}

if(isset($_SESSION['uid'])){
$uid=$_SESSION['uid'];
$uname=$_SESSION['name'];
header('location: uorder.php',true,303);
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
        <link href="../../styles/css/star-rating.css" rel="stylesheet" type="text/css" />
        <link href="../../styles/css/jquery.raty.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
        <link href="../../styles/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" href="../../styles/css/jQueryUI/jquery-ui.css">
        <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
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
        
    }
}
xmlhttp.open("GET","../Service/bikelist.php?company="+company,true);
xmlhttp.send();
}
 function checkfield(){
    var e1 = document.getElementById("f_area");
    var e2 = document.getElementById("date_");
    var e3 = document.getElementById("company");
    var e4 = document.getElementById("bikediv");
    var e5 = document.getElementById("stype");

    var str1 = new Array(5);
    str1[0]  = e1.value;
    str1[1]  = e3.options[e3.selectedIndex].text;
    str1[2]  = e4.options[e4.selectedIndex].text;
    str1[3]  = e5.options[e5.selectedIndex].text;
    str1[4]  = e2.value;
  
    var x=0;
    for (i = 0; i < str1.length; i++) { 
     if(str1[i]=="" || str1[i]=="--Select--" || str1[i]=="undefined"){
       x=1;
       

   }
}
if(x==0){
    document.getElementById("submitform").disabled = (1==0);
}else{
    document.getElementById("submitform").disabled = (1==1);
}

}


</script>

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
                            <div class="box">     <div class="box-header">
                                   <h3 class="box-title" style="float:left;">Search Details : </h3><h4 style="float:left;font-style:italic;font-size:12pt;color:#a7a7a7;margin:15px 0px 0px 15px">
                                   <?php echo $_SESSION['company']." ".$_SESSION['bike']." , ".$_SESSION['servicetype']." on ".$_SESSION['date']." near ".$_SESSION['area'];?></h4>
                                <div class="">
                           <button type="submit" id="modSearch" name="submit" style="margin:5px 0px 0px 15px;float:left;  background-color: hsl(214, 37%, 28%) !important;
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#7a99c1", endColorstr="#2c4361");
  background-image: -khtml-gradient(linear, left top, left bottom, from(#7a99c1), to(#2c4361));
  background-image: -moz-linear-gradient(top, #7a99c1, #2c4361);
  background-image: -ms-linear-gradient(top, #7a99c1, #2c4361);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #7a99c1), color-stop(100%, #2c4361));
  background-image: -webkit-linear-gradient(top, #7a99c1, #2c4361);
  background-image: -o-linear-gradient(top, #7a99c1, #2c4361);
  background-image: linear-gradient(#7a99c1, #2c4361);
  border-color: #2c4361 #2c4361 hsl(214, 37%, 19.5%);
  color: #fff !important;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.56);
  -webkit-font-smoothing: antialiased;" id="submit" class="btn btn-primary">ModifySearch</button>                                    
                       </div><form role="form" action ="../Service/choice.php" method="POST">
                                <div class="col-xs-12 box" id="searchRes" style="display:none">
                                     <div class="col-xs-3" >
                                        <div class="form-group" style="">
                                            <label for="exampleInputPassword1">Your Location<!--Added--><span class="error" >*</span></label>
                                            <input type="text" class="form-control" onchange="checkfield();" name="area" id="f_area" placeholder="Start typing your area, eg. Domlur">
                                        </div>
                                    </div>
                                    <div class="col-xs-3" >
                                        <div class="form-group" style="">
                                            <label>Service Category<!--Added--><span class="error" id="scat">*</span></label>
                                            <select class="form-control" onchange="checkfield();" name="servicetype" id="stype">
                                                <option selected="true">--Select--</option>
                                                <option value="Periodic Servicing">Periodic Servicing</option>
                                                <option value="Waterwash Service">Waterwash Service</option>
                                                <option value="Repair">Repair</option>
                                                <option value="Accidental">Accidental</option>
                                                <option value="Puncture">Puncture</option>
                                                <option value="Insurance Renewal">Request for Insurance Renewal</option>
                                                <option value="Accessories/Spairs">Accessories/Spares</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-xs-3" >
                                        <div class="form-group" style="">
                                            <label style="">Appointment Date&nbsp;<span class="error" id="adt">*</span></label>
                                            <p id="datepairExample">
                                                <input type="text" onchange="" style="" class="date start form-control" id="date_" name="date_" onchange="checkfield();" placeholder="eg.:27/07/2014"/>
                                            </div>
                                        </div>
                                        <div class="col-xs-3" >
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
                                     <div class="col-xs-3" >
                                        <div class="form-group" style="">
                                         <label>Bike Model<span class="error" id="bikename">*</span></label>
                                         <select class="form-control" id="bikediv" onchange="checkfield();" name="model">
                                        <?php
                                            $query = "SELECT * FROM bike where Company=\"$_SESSION[company]\" ";

                                            $query_result = mysql_query($query,$con)
                                            or die("Invalid query: " . mysql_error());
                                            $O_row="<option value='--Select--' class=".$_SESSION['company'].">--Select--</option>";
                                            while ($rw1=mysql_fetch_array($query_result)) {
                                            $O_row.="<option value=".$rw1['Model']." class=".$_SESSION['company'].">".$rw1['Model']."</option>";
                                              }

                                            echo $O_row;
                                         ?>
                                       </select>
                                   </div>
                                    </div>
                                <div class="col-xs-3">
                                <div class="form-group" style="margin-top:25px">
                                      <div class="checkbox" style="margin-left:0px">
                                <label>
                              <input type="checkbox" name="pickup" id="pick"> Need Home Pick-Up
                              </label>
                              </div>
                                   <button type="submit" id="submitform" name="submitform" style="" class="btn btn-primary">Search Again</button>                                    
                                </form> <div type="" id="modReset" name="" style="" class="btn btn-primary">Np,Thanks!</div>                                    
                               </div>
                               </div>
                                </div>
                                </div>

                       
                       <!-- /.box-header -->
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
                                                <input type="checkbox" id="shwCheck" name="pickUp">Show only NearBy Service-Centres
                                            </label>
                                        </div>
                                        <form action="cat2.php" method="POST">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                               <th>Select</th>
                                                <th>Service Provider</th>
                                                <th style="width:12%;">Rating</th>
                                                <th>Address</th>
                                                <th>Amenities</th>
                                            </tr>
                                        </thead>
                                        <tbody id="det_tab">
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                  <th>Select</th>
                                                <th>Service Provider</th>
                                                <th>Rating</th>
                                                <th>Address</th>
                                                <th>Amenities</th>
                                             </tr>
                                        </tfoot>
                                    </table>
                                </div><!-- /.box-body -->
                                <div class="box-body">
                                    <div class="form-group">
                                            <label for="exampleInputPassword1">Name<span class="error" id="usrn">*</span></label>
                                            <input type="text" class="form-control half-width" name="name" id="exampleInputPassword1" placeholder="Please enter your full name">
                                        </div>
                                        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                                              <script src="../../script/js/jquery-ui-1.10.3.min.js"></script>
                                            <script type="text/javascript">
                                             $('#shwCheck').change(function () {
                                                alert('changed');
                                             });
                                            var flag = 1;
                                                      $( ".target" ).change(function() {
                                                        if(flag == 1)
                                                        {
                                                            document.getElementById('shwRumTable').style.display="none";
                                                            document.getElementById('emerNote').style.display="block";
                                                            document.getElementById('addInfo').style.display="none";
                                                            document.getElementById('homePick').style.display="none";
                                                            flag=0;
                                                        }
                                                      else
                                                      {
                                                            document.getElementById('shwRumTable').style.display="block";
                                                            document.getElementById('addInfo').style.display="block";
                                                            document.getElementById('homePick').style.display="block";
                                                            document.getElementById('emerNote').style.display="none";

                                                            flag=1;
                                                      }
                                                    });

                                                         document.getElementById('f_area').value="<?php echo $_SESSION['area'];?>";
                                                         document.getElementById('date_').value="<?php echo $_SESSION['date'];?>";
                                                         document.getElementById('stype').value="<?php echo $_SESSION['servicetype'];?>";
                                                         document.getElementById('bikediv').value="<?php echo $_SESSION['bike'];?>";
                                                        document.getElementById('company').value="<?php echo $_SESSION['company'];?>";
                                                        if("<?php echo $_SESSION['pick']?>"=="on"){
                                                             document.getElementById('pick').checked=true;
                                                        }

                                            </script>
                                 
                                          <div class="form-group" style="clear:both;">
                                            <label for="exampleInputPassword1">Request In-Brief</label>
                                            <input type="text" class="form-control half-width" id="exampleInputPassword1" name="reqDetail" placeholder="Brief your Request">
                                           
                                        </div>
                                    
                                        <div class="form-group" id="addInfo">
                                            <label for="exampleInputPassword1">Additional Info</label>
                                            <input type="text" class="form-control half-width" name="addInfo" id="exampleInputPassword1" placeholder="Any other Info you would  like to share...">
                                        </div>
                                         <label for="exampleInputPassword1">Mobile Number<!--Added--><span class="error">*</span></label>
                                        <input type="text" class="form-control half-width" name="phnum" id="ph" placeholder="10 Digit Mobile Number">
                                    </div>
                                <div class="form-group" style="">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" style="" class="form-control half-width" id="email" onchange="checkfield();" placeholder="Enter Your Valid  email">
                                </div>
                                         <div class="box-footer">
                                        <button type="submit" name="submit" class="btn btn-primary">Submit Query</button>

                                    </div>
                                </form>
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
         <script src="../../script/js/jquery-ui-1.10.3.min.js"></script>
         <script src="../../script/js/star-rating.js"></script>
         <script src="../../script/js/jquery.raty.js"></script>
         <script>
            var datex="<?php echo $_SESSION['date']; ?>";
            var dt=Date.parse(datex);
            document.getElementById("date_")=dt.toString('yyyy/MM/dd')
         </script>
          <script type="text/javascript">

                                            var flag = 1;
                                                      $( "#modSearch" ).click(function() {
                                                        if(flag == 1)
                                                        {
                                                            document.getElementById('searchRes').style.display="block";
                                                            document.getElementById('modSearch').style.display="none";
                                                            flag=0;
                                                        }
                                                    });
                                                         $( "#modReset" ).click(function() {
                                                        if(flag == 0)
                                                        {
                                                            document.getElementById('searchRes').style.display="none";
                                                            document.getElementById('modSearch').style.display="block";
                                                            flag=1;
                                                        }
                                                    });
                                            </script>
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
$dist=3.00;

$place=$_SESSION['area'];
       
    $query = "SELECT * FROM area where area='".$place."'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    $query2 = "SELECT * FROM area";
    $query_result2 = mysql_query($query2,$con)
    or die("Invalid query: " . mysql_error());
    $O_row=" ";
   
   
    $src=mysql_fetch_array($query_result);
    $areas="'".$src['area']."'";
    while ($rw1 = mysql_fetch_array($query_result2)) {
          if(distance($src['lati'],$src['longi'],$rw1['lati'],$rw1['longi'])<$dist and $src['area']!=$rw1['area']){
            $areas = $areas.",'".$rw1['area']."'";
        }
    }
    $queryx = "SELECT * FROM serv_center where area in (".$areas.") AND company='".$_SESSION['company']."'";

    $queryx_result = mysql_query($queryx,$con)
    or die("Invalid query: " . mysql_error());
    $chkbox = array();
    while ($rw1 = mysql_fetch_array($queryx_result)) {

         $flag1=0;

        $query = "SELECT amenity,description FROM Amenities where S_id='".$rw1[S_id]."'";         
        $query_result = mysql_query($query,$con)
        or die("Invalid query: " . mysql_error());         
        $amnty="";
        while($amm = mysql_fetch_array($query_result)){
        $amnty.=$amm['amenity']." - ".$amm['description'].", ";         
            if($_SESSION['pick']=="on" && $amm['amenity']=="Pickup" && $amm['description']=="no")
                $flag1=1;
        
        }

        if( $flag1==0){
        $chkbox[]="chk_$rw1[S_id]";
        $O_row.="<tr>";
        $O_row.='<th><input type="checkbox" name="chk_'.$rw1[S_id].'" id="chk_'.$rw1[S_id].'" ></th>';
        $O_row.="<td>$rw1[S_name]</td>";
        $O_row.='<th><div id="r_'.$rw1[S_id].'" type="number" class="rating" ></div></th>';
        $O_row.="<td>$rw1[address]</td>";
        $O_row.="<td>".$amnty."</td>";
        $O_row.="</tr>";
        }
     }


print "<script>document.getElementById('det_tab').innerHTML=document.getElementById('det_tab').innerHTML+'".$O_row."';</script>";
?>
<?php
$text=<<<EOT
<script type="text/javascript">
$(function() {
    var availableTags = [
EOT;

$query = "SELECT distinct area FROM area";
$query_result = mysql_query($query,$con)
or die("Invalid query: " . mysql_error());
$O_row="\"Halarur\"";
while ($rw1=mysql_fetch_array($query_result)) {
    $O_row.=",\"".$rw1[area]."\"";
}
$text.=$O_row;

$text.=<<<EOX
];
    $( "#f_area" ).autocomplete({
      source: availableTags
  });
    
});
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
                // initialize with defaults
</script>
<script>
$( document ).ready(function() {
    console.log( "ready!" );

EOX;
   $queryx = "SELECT * FROM serv_center where area in (".$areas.")";
    $queryx_result = mysql_query($queryx,$con)
    or die("Invalid query: " . mysql_error());
    
    while ($rw1 = mysql_fetch_array($queryx_result)) {

        $query = "SELECT (rate_1*1+rate_2*2+rate_3*3+rate_4*4+rate_5*5)/(rate_1+rate_2+rate_3+rate_4+rate_5) as rate FROM rating where S_id='".$rw1[S_id]."'";
        $query_result = mysql_query($query,$con)
        or die("Invalid query: " . mysql_error());
        $qual = mysql_fetch_array($query_result);
        $q=$qual['rate'];
        $text.= "\n$('#r_".$rw1[S_id]."').raty({\n";
        $text.= "score : ".$q.",\n";
        $text.= "readOnly : true\n";
        $text.= "});\n";


    }
$text.=<<<EOD
});
        </script>
EOD;
echo $text;
?>
<?php
if(isset($_POST['submit'])){
    $mobile=$_POST['phnum'];
    if($_POST['name']=="" or $_POST['phnum']=""){
        echo "<script>alert('Please fill in all mandatory fields');</script>";
    }
    elseif($mobile<7000000000 or $mobile>9999999999){
    echo "<script>alert('Please enter a correct ".$mobile." number');</script>";
    }
   else{

    $query = "Select count(*) as count from user where mobile='".$mobile."'";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    $rw1 = mysql_fetch_array($query_result);
    if($rw1['count']>0){
         echo "<script>alert('We already have this number ".$mobile." registered');</script>";
    }



    $tim=time();
    $ctick=0;
    foreach ($chkbox as $value1) {

        foreach( $_POST as $key => $value ) {
            if($value1==$key){
                $ctick=$ctick+1;
            }
        }
    }
     if($ctick>1){
          echo "<script>alert('Too many Selected..');</script>";
     }
     else{
       
     
    //post to user table
    $query = "Replace into user values( '".$_POST['name']."','".$_SESSION['area']."','".$tim."','". $_POST['phnum']."','".$_POST['email']."','".$_POST['addr']."')";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
    $c=$tim;
    $pkp=0;
    if($_SESSION['pick']=="on"){
            $pkp=1;
    }
    //post to vendor_order
    foreach ($chkbox as $value1) {

        foreach( $_POST as $key => $value ) {
            if($value1==$key){
                $sid=substr ($value1,strpos($value1,"_")+1);
                echo "<script>alert(' SID is ".$sid."');</script>"; 
                $query = "Insert into vendor_order values( '". $_POST['phnum']."','".$sid."','".$c."100','". $_POST['phnum']."','".$_SESSION['company']." ".$_SESSION['bike']."','".date("Y/m/d",strtotime($_SESSION['date']))."','0',";
                $query .= "NULL,NULL,'1','Query','','No Advice!!','','".$_SESSION['area']."','".$pkp."')";   
                $query_result = mysql_query($query,$con)
                or die("Invalid query: " . mysql_error());
                $c=$c+1;
            }
        
            }
        
   }
   
    //post to order det
    $query = "Insert into order_det values( '".$tim."','".$tim."100','".$_SESSION['servicetype']."','". $_POST['addInfo']."','".$_POST['reqDetail']."')";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());

    //update slots
   }
}    
}

?>


    </body>
</html>

    
