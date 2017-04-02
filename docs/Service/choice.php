    <?php
        session_start();
    
    if(isset($_POST['submitform'])){ 

        $_SESSION['servicetype'] =$_POST['servicetype'];
        $_SESSION['area'] =$_POST['area'];
        $_SESSION['bike']=$_POST['model'];
        $_SESSION['company']=$_POST['company'];
        $_SESSION['date'] =$_POST['date_'];   
       if(isset($_SESSION['uid'])){
        $link="ucat";
       }
       else{
        $link="cat";
       }
    
     if($_POST['servicetype']=='Periodic Servicing'){
            echo '<script type="text/javascript"> window.location.href = "../UI/'.$link.'1.php";</script>';
        }
        elseif($_POST['servicetype']=='Insurance'){
             echo '<script type="text/javascript"> window.location.href = "../UI/'.$link.'4.php";</script>';
        }elseif($_POST['servicetype']=='Repair'){
             echo '<script type="text/javascript"> window.location.href = "../UI/'.$link.'3.php";</script>';
        }elseif($_POST['servicetype']=='Query'){
            echo '<script type="text/javascript"> window.location.href = "../UI/'.$link.'2.php";</script>';
        }
        else{
         echo '<script type="text/javascript"> window.location.href = "localhost/public_html/";</script>';
        }
    }
?>