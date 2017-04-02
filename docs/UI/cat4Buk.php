<!DOCTYPE html>
<?php 
session_start();
require_once("../../includes/db/connection.php"); 
if(isset($_POST['submitDet'])){ 
            $sid=substr ($_POST['slot'],0,strpos($_POST['slot'],"_"));
            $exp_apt=substr ($_POST['slot'],strpos($_POST['slot'],"_")+1);
            //$company = $_POST['company'];
            $terms = array('Hero' => 'http://www.heromotocorp.com/en-in/rider-zone/bike-services-and-maintenance-schedule.html',
              'Honda' => 'http://www.universalhonda.com/free_services.html',
              'Bajaj' => 'http://www.bajajauto.com/services_maintenance.asp');
          }
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
                <section class="content">
                        <div class="filterBYContainer">
                        <div style="clear: both;"></div>
                        <div id="accordion1">
                            <h3 id="acc0">
                                <span>Registration Details</span>
                            </h3>
                            <div  class="mxHelpFiltersExpandedView"
                                style="min-height: 0px !important">
                                        <div class="form-group col-xs-3" style="">
                                             <label>Registration Year<span class="error" id="scat">*</span></label>
                                             <select class="form-control" id="regYear" name="regYear" onchange="checkdetails();">
                                                 <option value="">--Select--</option>
                                                 <option value="2014">2014</option>
                                                 <option value="2013">2013</option>
                                                 <option value="2012">2012</option>
                                                 <option value="2011">2011</option>
                                                 <option value="2010">2010</option>
                                                 <option value="2009">2009</option>
                                                 <option value="2008">2008</option>
                                                 <option value="2007">2007</option>
                                                 <option value="2006">2006</option>
                                                 <option value="2005">2005</option>
                                                 
                                             </select>
                                         </div>
                                       <div class="form-group col-xs-3" style="">
                                            <label for="exampleInputPassword1">Registration Number<span class="error" >*</span></label>
                                            <input type="text" class="form-control" onchange="checkdetails();" name="area" id="regNum" placeholder="eg. KA01..">
                                        </div>
                                        <div class="form-group col-xs-3" style="">
                                             <label>Existing Policy Expiry Date<span class="error" id="scat">*</span></label>
                                             <select class="form-control" id="expDate" name="expDate" onchange="checkdetails();">
                                                 <option value="">--Select--</option>
                                                 <option value="10">Next 10 Days</option>
                                                 <option value="30">Next 30 Days</option>
                                                 <option value="100">More than 30 Days</option>
                                                 <option value="0">Already Expired</option>
                                             </select>
                                         </div>
                                        <div class="form-group col-xs-3" style="">
                                             <label>Previous Insurer<span class="error" id="scat">*</span></label>
                                             <select class="form-control" id="prevIns" name="prevIns" onchange="checkdetails();">
                                                 <option value="">--Select--</option>
                                                 <option value="13">Bajaj Allianz</option>
                                                <option value="16">Bharti Axa</option>
                                                <option value="4">Cholamandalam</option>
                                                <option value="14">Future Generali</option>
                                                <option value="2">HDFC ERGO</option>
                                                <option value="3">ICICI Lombard</option>
                                                <option value="5">Iffco Tokio</option>
                                                <option value="21">L&amp;T</option>
                                                <option value="6">National Insurance</option>
                                                <option value="12">New India Assurance</option>
                                                <option value="8">Oriental</option>
                                                <option value="29">RAHEJA</option>
                                                <option value="1">Reliance</option>
                                                <option value="10">Royal Sundaram</option>
                                                <option value="22">SBI</option>
                                                <option value="15">Shriram General Insurance</option>
                                                <option value="9">Tata AIG</option>
                                                <option value="11">United Insurance</option>
                                                <option value="17">Universal Sompo</option>
                                             </select>
                                         </div>
                                        <div class="form-group col-xs-12" style="margin-top:4%">
                                            <label><input id="facet12" type="checkbox"
                                            value="help_use" onclick="handleClick('SCENARIOS','facet12');"><span style="margin-lefT:10px;margin-bottom:1px;">I have made Claims in Previous Policy</span></label>
                                        </div>
                                        
                                        <div class="form-group col-xs-4" style="">
                                    <button class='next btn btn-primary' id="zero" disabled="true" style="font-size:12px;">
                                        Next Step
                                    </button></div>
                            </div>
                            <h3 id="acc1" class="ui-state-disabled">
                                <span>Personal Info</span>
                            </h3>
                            <div  class="mxHelpFiltersExpandedView"
                                style="min-height: 0px !important">
                                       <div class="form-group col-xs-4" style="">
                                            <label for="exampleInputPassword1">Full Name<!--Added--><span class="error" >*</span></label>
                                            <input type="text" class="form-control" onchange="checkfield();" name="full_name" id="full_name" placeholder="eg. Rakesh Vaddadi">
                                        </div>
                                        <div class="form-group col-xs-4" style="">
                                            <label for="exampleInputPassword1">Alternative Mobile Number<!--Added--><span class="error" ></span></label>
                                            <input type="text" class="form-control" name="ph_num" id="ph_num" placeholder="eg. 8123885915">
                                        </div>
                                        <div class="form-group col-xs-4" style="">
                                            <label for="exampleInputPassword1">Email ID<!--Added--><span class="error" >*</span></label>
                                            <input type="email" class="form-control" onchange="checkfield();" name="email" id="email" placeholder="eg. xyz@email.com">
                                        </div>
                                        <div class="form-group col-xs-4" style="">
                                            <label for="">Full Address<!--Added--><span class="error" >*</span></label>
                                            <textarea class="form-control" onchange="checkfield();" name="addr" id="addr"></textarea>
                                        </div>
                                        <div class="form-group col-xs-4" style="margin-top:4%">
                                            <label><input id="facet12" type="checkbox"
                                            value="help_use" onclick=""><span style="margin-lefT:10px;margin-bottom:1px;">Need Home PickUp</span></label>
                                        </div>
                                        
                                        <div class="form-group col-xs-12" style="">
                                        <button class='previous btn btn-primary' style="font-size:12px;">
                                    Go Back
                                </button>
                                    <button class='next btn btn-primary' disabled="true" id="first"style="font-size:12px;">
                                        Go for Review
                                    </button></div>
                            </div>
                            <h3 id="acc2" class="ui-state-disabled">
                                <span>Review your Service Order</span>
                            </h3>
                            <div  class="mxHelpFiltersExpandedView"
                                style="min-height: 0px !important">
                              </br>
                                <?php echo "<span style='font-size:16px;line-height:1'>You have opted for <i style='color:rgb(77, 121, 199)'>".$_SESSION['servicetype']."</i> on <i style='color:rgb(77, 121, 199)'>".$_SESSION['date']."</i> for your <i style='color:rgb(77, 121, 199)'>".$_SESSION['bike']."</i> in <i style='color:rgb(77, 121, 199)'>Rakesh Motors </i>@<i style='color:rgb(77, 121, 199)'> ".$exp_apt." am </i>near <i style='color:rgb(77, 121, 199)'>".$_SESSION['area']."</i></span>";                     
                              ?>
                              <div class="filterBYContainer" id="freeTerms" style="margin-top:10px;display:none;">
                                <div class="form-group col-xs-12" id="freeTerms">You have opted free periodic servicing for your <i><?php echo $_SESSION['bike']."</i> of <i>".$_SESSION['company']."</i> company";?>
                                .</br>Please read their terms and conditions to avail this service before your proceed. <a href="<?php echo $terms[$_SESSION['company']]?>" target="_blank" style="color:blue;text-decoration:underline;"><?php echo $_SESSION['company']."-"?>Terms for Free Servicing</a>
                              </div>
                              
                              
                         </div>

                         <div class="form-group col-xs-4" style="">
                                            <label for="exampleInputPassword1">Enter OTP<!--Added--><span class="error" >*</span></label>
                                            <input type="text" class="form-control" onchange="checkslots();" maxlength="10" name="area" id="phNum" placeholder="Enter 6 digit OTP">
                                        </div>
                                <div class="clearBoth" style="clear:both;"></div>
                                <button class='previous btn btn-primary' style="font-size:12px;">
                                    Go Back
                                </button>
                                <button class='next btn btn-primary' style="font-size:12px;"  id="second">
                                    Checkout
                                </button>
                            </div>
                            <h3 id="acc3" class="ui-state-disabled">
                                <span>Make Payment</span>
                            </h3>
                            <div  class="mxHelpFiltersExpandedView "
                                style="min-height: 0px !important" >
                              </br>

                                <input id="nb" type="radio" value="nb" name="payMode" 
                                     >Net Banking
                                <div class="clearBoth"></div>
                                <input id="card" type="radio" value="card" name="payMode"
                                    >Credit/Debit Card
                                <div class="clearBoth"></div>
                                <input id="cod" type="radio" value="cod"  name="payMode"
                                     >Cash on Delivery
                                <div class="clearBoth"></div>
                                <div class="form-group col-xs-12" style="margin-top:4%">
                                            <label><input id="mrTerms" type="checkbox"
                                              value="" onclick="termsEnable();"><span style="margin-lefT:10px;margin-bottom:1px;">I agree to MotoRevive's <a>Terms and Conditions</a></span></label>
                                        </div>
                                <button class='next btn btn-primary' style="font-size:12px;" id="third" disabled="true">
                                <a href="final.php" style="color:white">Proceed</a>
                                </button>
                            </div>

                        </div>
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
<?php 
$regNum = "\"AP01-Andhra Pradesh(Adilabad)\",\"AP01-Andhra Pradesh(Mancherial)\",\"AP01-Andhra Pradesh(Nirmal)\",\"AP02-Andhra Pradesh(Anantapur)\",\"AP02-Andhra Pradesh(Guntakal)\",\"AP02-Andhra Pradesh(Hindupur)\",\"AP03-Andhra Pradesh(Tirupathi)\",\"AP03-Andhra Pradesh(Chittoor)\",\"AP03-Andhra Pradesh(Madanapalle)\",\"AP03-Andhra Pradesh(Rajampet)\",\"AP04-Andhra Pradesh(Kadapa)\",\"AP04-Andhra Pradesh(Proddatur)\",\"AP05-Andhra Pradesh(Kakinada)\",\"AP05-Andhra Pradesh(Amalapuram)\",\"AP05-Andhra Pradesh(Rajahmundry)\",\"AP06-Andhra Pradesh(Kakinada)\",\"AP07-Andhra Pradesh(Guntur)\",\"AP07-Andhra Pradesh(Piduguralla)\",\"AP07-Andhra Pradesh(Narasaraopet)\",\"AP07-Andhra Pradesh(Repalle)\",\"AP08-Andhra Pradesh(Guntur)\",\"AP09-Andhra Pradesh(Khairtabad)\",\"AP10-Andhra Pradesh(Secunderabad)\",\"AP11-Andhra Pradesh(Hyderabad)\",\"AP12-Andhra Pradesh(Bahadurpura)\",\"AP13-Andhra Pradesh(Mehdipatnam)\",\"AP14-Andhra Pradesh(Karimnagar)\",\"AP15-Andhra Pradesh(Karimnagar)\",\"AP15-Andhra Pradesh(Jagtial)\",\"AP15-Andhra Pradesh(Peddapalli)\",\"AP16-Andhra Pradesh(Bejawada)\",\"AP16-Andhra Pradesh(Gudivada)\",\"AP16-Andhra Pradesh(Machilipatnam)\",\"AP16-Andhra Pradesh(Nandigama)\",\"AP16-Andhra Pradesh(Nuzvid)\",\"AP17-Andhra Pradesh(Bejawada)\",\"AP17-Andhra Pradesh(Gudivada)\",\"AP17-Andhra Pradesh(Machilipatnam)\",\"AP17-Andhra Pradesh(Nandigama)\",\"AP17-Andhra Pradesh(Nuzvid)\",\"AP18-Andhra Pradesh(Bejawada)\",\"AP18-Andhra Pradesh(Gudivada)\",\"AP18-Andhra Pradesh(Machilipatnam)\",\"AP18-Andhra Pradesh(Nandigama)\",\"AP18-Andhra Pradesh(Nuzvid)\",\"AP19-Andhra Pradesh(Bejawada)\",\"AP19-Andhra Pradesh(Gudivada)\",\"AP19-Andhra Pradesh(Machilipatnam)\",\"AP19-Andhra Pradesh(Nandigama)\",\"AP19-Andhra Pradesh(Nuzvid)\",\"AP20-Andhra Pradesh(Khammam)\",\"AP20-Andhra Pradesh(Kothagudem)\",\"AP20-Andhra Pradesh(Sathupally)\",\"AP20-Andhra Pradesh(Yellandu)\",\"AP21-Andhra Pradesh(Kurnool)\",\"AP21-Andhra Pradesh(Adoni)\",\"AP21-Andhra Pradesh(Nandyal)\",\"AP22-Andhra Pradesh(Mahaboobnagar)\",\"AP22-Andhra Pradesh(Pebbair)\",\"AP22-Andhra Pradesh(Gadwal)\",\"AP23-Andhra Pradesh(Sangareddy)\",\"AP23-Andhra Pradesh(Siddipet)\",\"AP23-Andhra Pradesh(Medak (RC puram))\",\"AP24-Andhra Pradesh(Nalgonda)\",\"AP24-Andhra Pradesh(Bhongir)\",\"AP24-Andhra Pradesh(Suryapet)\",\"AP25-Andhra Pradesh(Nizamabad)\",\"AP25-Andhra Pradesh(Kamareddy)\",\"AP26-Andhra Pradesh(Nellore)\",\"AP26-Andhra Pradesh(Kavali)\",\"AP26-Andhra Pradesh(Gudur)\",\"AP26-Andhra Pradesh(Sullurpeta)\",\"AP27-Andhra Pradesh(Ongole)\",\"AP27-Andhra Pradesh(Chirala)\",\"AP27-Andhra Pradesh(Markapur)\",\"AP27-Andhra Pradesh(Prakasam)\",\"AP28-Andhra Pradesh(Rangareddy)\",\"AP29-Andhra Pradesh(Rangareddy)\",\"AP30-Andhra Pradesh(Srikakulam)\",\"AP30-Andhra Pradesh(Tekkali)\",\"AP30-Andhra Pradesh(Palasa)\",\"AP30-Andhra Pradesh(Somepeta)\",\"AP30-Andhra Pradesh(Ichapuram)\",\"AP30-Andhra Pradesh(Kaviti)\",\"AP31-Andhra Pradesh(Visakhapatnam)\",\"AP31-Andhra Pradesh(Gajuwaka)\",\"AP31-Andhra Pradesh(Anakapalli)\",\"AP32-Andhra Pradesh(Visakhapatnam)\",\"AP33-Andhra Pradesh(Gajuwaka)\",\"AP34-Andhra Pradesh(Gajuwaka)\",\"AP35-Andhra Pradesh(Vizianagaram)\",\"AP36-Andhra Pradesh(Warangal)\",\"AP36-Andhra Pradesh(Jangaon)\",\"AP37-Andhra Pradesh(Eluru)\",\"AP37-Andhra Pradesh(Jangareddygudem)\",\"AP37-Andhra Pradesh(Kovvur)\",\"AP37-Andhra Pradesh(Tadepalligudem)\",\"AP37-Andhra Pradesh(Tanuku)\",\"AP37-Andhra Pradesh(Bhimavaram)\",\"AP37-Andhra Pradesh(Palakollu)\",\"AR07-Arunachal Pradesh(Daporijo)\",\"BR04-Bihar(Chapra)\",\"CG15-Chhattisgarh(Ambikapur)\",\"CG20-Chhattisgarh(Bijapur)\",\"GA03-Goa(Mapusa)\",\"KA28-Karnataka(Bijapur)\",\"KA40-Karnataka(Chikkaballapur)\",\"KL01-Kerala(Thiruvananthapuram)\",\"KL04-Kerala(Alappuzha)\",\"KL10-Kerala(Malappuram)\",\"KL23-Kerala(Karunagapally)\",\"KL28-Kerala(Mallappally)\",\"KL34-Kerala(Kanjirappally)\",\"KL51-Kerala(Ottappalam)\",\"MH09-Maharashtra(Kolhapur)\",\"MH13-Maharashtra(Solapur)\",\"MH34-Maharashtra(Chandrapur)\",\"MP27-Madhya Pradesh(Ambikapur)\",\"MP42-Madhya Pradesh(Shajapur)\",\"NL07-Nagaland(Dimapur)\",\"OD10-Odisha(Koraput)\",\"OD20-Odisha(Gajapati)\",\"OD26-Odisha(Nuapada)\",\"OD29-Odisha(Kendarapara)\",\"OR10-Orissa(Koraput)\",\"OR20-Orissa(Gajapati)\",\"OR26-Orissa(Nuapada)\",\"OR29-Orissa(Kendarapara)\",\"PB09-Punjab(Kapurthala)\",\"PB73-Punjab(Tappa Mandi)\",\"RJ35-Rajasthan(Pratapgarh)\",\"TN29-Tamil Nadu(Dharmapuri)\",\"TN45-Tamil Nadu(Tiruchirapalli)\",\"TN51-Tamil Nadu(Nagapattinam)\",\"TN60-Tamil Nadu(Uthamapalayam)\",\"TN65-Tamil Nadu(Ramanathapuram)\",\"TN69-Tamil Nadu(Ettaiyapuram)\",\"TN77-Tamil Nadu(Valapadi)\",\"TN78-Tamil Nadu(Dharapuram)\",\"UA13-Uttarakhand(Rudraprayag)\",\"UK13-Uttarakhand(Rudraprayag)\",\"UP34-Uttar Pradesh(Sitapur)\",\"UP63-Uttar Pradesh(Mirzapur)\",\"UP72-Uttar Pradesh(Pratapgarh)\",\"WB33-West Bengal(Midnapur)\",\"WB34-West Bengal(Midnapur)\",\"WB39-West Bengal(Durgapur)\",\"WB40-West Bengal(Durgapur)\"";
?>
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
        if(this.id == "first"){
          if ($('#fs').is(":checked")) {
            document.getElementById('freeTerms').style.display = "block";
          }
          else{
                        document.getElementById('freeTerms').style.display = "none";
          }
        }
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
        var availableTags = [<?php echo $regNum;?>];
    $( "#regNum" ).autocomplete({
      source: availableTags
  });
      
    });
function termsEnable(){
   if(document.getElementById("mrTerms").checked ){
          document.getElementById("third").disabled = (1==0);
        }
        else{
                    document.getElementById("third").disabled = (1==1);
        }
}
function checkfield(){
    var e1 = document.getElementById("full_name").value;
    var e2 = document.getElementById("email").value;
    var e3 = document.getElementById("addr").value;
    var x=0;
    var e4 = 0;

    if(e1 == "" || e2 == "" || e3 == ""){
        e4 = 0;
    }
    else{
        e4 = 1;
        x = 0;
    }
     if(e4 == 0){
       x=1;
   } 
if(x == 0){
    document.getElementById("first").disabled = (1==0);
}else{
    document.getElementById("first").disabled = (1==1);
}

}
function checkdetails(){
    var e1 = document.getElementById("regYear");
    var e2 = document.getElementById("regNum");
    var e3 = document.getElementById("expDate");
    var e4 = document.getElementById("prevIns");

    var str1 = new Array(4);
    str1[0]  = e1.options[e1.selectedIndex].text;
    str1[1]  = e2.value;
    str1[2]  = e3.options[e3.selectedIndex].text;
    str1[3]  = e4.options[e4.selectedIndex].text;
  
    var x=0;
    for (i = 0; i < str1.length; i++) { 
     if(str1[i]=="" || str1[i]=="--Select--" || str1[i]=="undefined"){
       x=1;
   }
}
if(x==0){
    document.getElementById("zero").disabled = (1==0);
}else{
    document.getElementById("zero").disabled = (1==1);
}

}
</script>
</html>

