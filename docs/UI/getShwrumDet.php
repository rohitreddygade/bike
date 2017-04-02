
<?php  session_start(); 
if ($_POST) {
    $shwrum_name = $_POST['shwrum_name'];
    $date_ = $_POST['date'];
    $srName = $_POST['srName'];
 $_SESSION['date'] =$_POST['date'];   
    if ($shwrum_name != '') {
       $sname = $shwrum_name;
       function getslots($name,$dt,$slothr){

/*            include ("../../includes/db/connection.php"); */
            $con = mysql_connect("localhost","root","");
            $db_select = mysql_select_db("bikeservice",$con);
            $query = "SELECT count(*), slots FROM slots where (hour='".$slothr."' and DATE_FORMAT(day,'%Y/%m/%d')='".$dt."'  and sid='".$name."')";
            $query_result = mysql_query($query,$con)
            or die("Invalid query: " . mysql_error());
            $res = mysql_fetch_array($query_result);
            $c=$res['count(*)'];
            if($c<=0){
                $query =  'INSERT INTO slots VALUES ("'.$name.'", "'.$dt.'", "'.$slothr.'", "10")';            
                $query_result = mysql_query($query,$con)
                or die("Invalid query: " . mysql_error());
                
                return '<th><input type="radio" name="slot" onchange="checkslots();" value="'.$name.'_'.$slothr.'">&nbsp;&nbsp;'.$slothr.':00&nbsp;<span class="badge bg-green">10 Slots</span></th>';
            }
            else{
                return '<th><input type="radio" name="slot" onchange="checkslots();" value="'.$name.'_'.$slothr.'">&nbsp;&nbsp;'.$slothr.':00&nbsp;<span class="badge bg-green">'.$res['slots'].' Slots</span></th>';
            }
       }
      $book_data="<div  class='shwRum1_buk_slots' >You have selected <strong>";
      $book_data .= $srName;
      $book_data .= '</strong><i><strong>- Book Your Slot...</strong></i></div>';
       $book_data.='<div class=" table-responsive no-padding" style="margin-left:3%;width:550px;float:left;margin-top:10px;">';
       $book_data.='<table class="table table-hover"><tr>';
       $book_data.= getslots($sname,$date_,"9");
       $book_data.=getslots($sname,$date_,"10");
       $book_data.=getslots($sname,$date_,"11");
       $book_data.=getslots($sname,$date_,"12");
       $book_data.="</tr><tr>";
       $book_data.=getslots($sname,$date_,"13");
       $book_data.=getslots($sname,$date_,"14");
       $book_data.=getslots($sname,$date_,"15");
       $book_data.=getslots($sname,$date_,"16");
       $book_data.="</tr><tr>";
       $book_data.=getslots($sname,$date_,"17");
       $book_data.=getslots($sname,$date_,"18");
       $book_data.=getslots($sname,$date_,"19");
       $book_data.=getslots($sname,$date_,"20");
       $book_data.="</tr>";
       $book_data.=<<<EOD
                        </table>
                    </div>
                     <div style="width:200px;float:right;margin-top:10px;">
                        <!-- Info box -->
                        <div class="box box-solid box-info">
                            <div class="box-header">
                                <h3 class="box-title" style="font-size:15px">Color Code</h3>
                                <div class="box-tools pull-right">
                                    <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                    <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body"  style="float:left;">
                                <p>
                                    <span class="badge bg-grey">Grey&nbsp;</span> &nbsp;- Slots Empty</br>
                                    <span class="badge bg-red">Red&nbsp;&nbsp;</span>&nbsp;&nbsp;&nbsp;- Few Slots</br>
                                    <span class="badge bg-green">Green</span> -&nbsp;More Slots 
                                </p>
                              </div></div></div>
                    </div>
EOD;
  echo $book_data;

    }
}

?>
