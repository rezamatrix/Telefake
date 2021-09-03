<?php
include("conf.php");
    $sql = "SELECT chetidfr FROM `refral`";
$result = $conn->query($sql);
$fr='';
while($row=$result->fetch_array()){
   $reza=$row['chetidfr'];
     $sql1 = "SELECT id FROM `refral` WHERE `chetidfr` = '$reza'";
$result1 = $conn->query($sql1);
$cunt= $result1->num_rows ;
if($cunt>1){
     $sql2 = "SELECT id,chetidrf FROM `refral`  WHERE `chetidfr` = '$reza'";
$result2 = $conn->query($sql2);
while($row2=$result2->fetch_array() and  $cunt >1){
 $rr=$row2['id'];
 $id=$row2['chetidrf'];
          $sqlaaa = "UPDATE `user` SET `b2` = b2 - 100 WHERE `chatid` = $id;";
          $conn->query($sqlaaa);
     $sql3 = "DELETE FROM `refral` WHERE `id` = $rr;";
$result3 = $conn->query($sql3);
$cunt--;
}
}
}
?>