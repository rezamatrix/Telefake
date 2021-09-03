<?php
include("conf.php");

$sql = "SELECT * FROM `chj` WHERE  im= '0'";
$result = $conn->query($sql);

while($row=$result->fetch_array()){
  $rr1=$row['ci'];
  $rr2=$row['ij'];
  $r=$row['id'];

  $sql1 = "SELECT *FROM `cht` WHERE  id= '$rr2'";
$result1 = $conn->query($sql1);
$row1=$result1->fetch_assoc()  ;

$name3= $row1['idch'];


   $url= "https://api.telegram.org/$token_bot/getChatMember?chat_id=".$name3."&user_id=".$rr1;
  $t=file_get_contents($url);
    $arrayMessage= json_decode($t, true);
      $ids=$arrayMessage['result']['user']['id'];
      $ids2=$arrayMessage['result']['status'];

      if($ids2=='left'){
                              $sql = "UPDATE `user` SET `b2` = b2 - 200  WHERE `chatid` = $rr1;";
          $conn->query($sql);
                                        $sql = "UPDATE `chj` SET `im` = 1  WHERE `id` = $r;";
          $conn->query($sql);
          $e1=urlencode('200 امتیاز از حساب شما کم شد');
          file_get_contents("https://api.telegram.org/$token_bot/sendMessage?chat_id=".$rr1."&text=".$e1);
                echo $rr1;
      }
}
?>