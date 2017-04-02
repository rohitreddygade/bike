<?php
require_once("../../includes/db/connection.php");
$query = "SELECT * FROM bike where Company=\"$_GET[company]\" ";
    $query_result = mysql_query($query,$con)
    or die("Invalid query: " . mysql_error());
   $O_row="<option value='--Select--' class=".$_GET[company].">--Select--</option>";
   while ($rw1=mysql_fetch_array($query_result)) {
    $O_row.="<option value=".$rw1[Model]." class=".$_GET[company].">".$rw1[Model]."</option>";
    }
    echo $O_row;
?>