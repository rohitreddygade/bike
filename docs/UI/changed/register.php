<!DOCTYPE html>
<?php require_once("../../includes/db/connection.php"); 
if (!session_id()) session_start();
if(isset($_SESSION['uid'])){
$uid=$_SESSION['uid'];
$uname=$_SESSION['name'];
header('location: uorder.php',true,303);
}
/*require_once ("send_mail.php");*/?>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>New User | Registration Page</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../../styles/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../../styles/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
                <link rel="shortcut icon" href="img/icons/favicon.ico" type="image/x-icon">
        <link href="../../styles/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Register New Membership</div>
            <form role="form" action ="register.php" method="POST">
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Full name"/>
                    </div>
		    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Phone Number"/>
                    </div>
		    <div class="form-group">
                        <textarea name="addr" class="form-control" placeholder="Address"></textarea> 
                    </div>
                    <div class="form-group">
                        <input type="text" name="area" class="form-control" placeholder="Location"/>
                    </div>
                    
		    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email Id"/>
                    </div>
                     <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password2" class="form-control" placeholder="Retype password"/>
                    </div>
                </div>
                <div class="footer">                    

                    <button type="submit" name="submit" class="btn bg-olive btn-block">Sign me up</button>

                    <a href="login.php" class="text-center">I already have a membership</a>
                </div>
            </form>

        </div>


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>
<?php

function debug_to_console( $data ) {

    if ( is_array( $data ) )
        $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
    else
        $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

    echo $output;
}

if(isset($_POST['submit']))
{

$ph = $_POST['phone'];
$mail = $_POST['email'];
$name = $_POST['name'];
$addr = $_POST['addr'];
$p = $_POST['password'];
$p2 = $_POST['password2'];
$area = $_POST['area'];


$fail=0;
if($ph<999999999 or $ph>9999999999){
$fail=1;
print '<script type="text/javascript">alert("Enter a valid Number");</script>';
}
if($name="" or $addr=="" or $area=""){
$fail=1;
print '<script type="text/javascript">alert("Please fill all the details");</script>';
}

if($p!=$p2){
$fail=1;
print '<script type="text/javascript">alert("Passwords don\'t match");</script>';
}

if($fail==0){
$sql="INSERT INTO user(
name,
pwd,
mobile,email,address,area)
VALUES
('$name',
'$p',
'$ph',
'$mail',
'$addr'
)";
$result = mysql_query($sql)
or die("Invalid query: " . mysql_error());
print '<script type="text/javascript">';
print 'alert("Registered successfully")';
print '</script>'; 
$msg = "Dear ".$name.",Thank you for registering with Rishi Motors. You may now login at http://rishihero.in to avail our services with login ID as your mobile number and password as ".$p." . Please collect your gift next time you place the order online.";
$custMsg = urlencode($msg);
$hitMsg = "https://control.msg91.com/api/sendhttp.php?authkey=69509ADEgkbWLb53bfb0d0&mobiles=".$ph."&message=".$custMsg."&sender=RMHERO&route=4";
// $m = file_get_contents($hitMsg);
$chk = sendmsg($msg,$mail);
echo $chk;
  $HTML =<<< HTML

<script type="text/javascript">
window.location.replace("http://localhost/boss/docs/UI/login.php");
</script>

HTML;
print $HTML;
}
else{
    print '<script type="text/javascript">';
print 'alert("Enter Valid Details..")';
print '</script>'; 
}
}
?>
