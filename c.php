<?php
        include("conf.php");

        $id=$_GET['id'];
        if(!preg_match( "/[:,\\. ^ ? ; & | !  # $ % ^ *( )   € < > \\n\\r\\t\\s]+/", $id )){
                       $sql = "SELECT *FROM `p`WHERE `vercher` = '$id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
          $balance=$row['fee'];
          $id2=$row['id'];
          $balance1=$row['status'];
          $balance3=$row['chatid'];
    }
$orderId = (int) $_GET["order_id"];
$api = $api_pardano ;
$amount = $balance ; //Tooman
$client = new SoapClient("http://pardano.com/p/webservice/?wsdl");
$result = $client->verification($api,$amount,$_GET["au"]);
if( ! empty($result) and $result == 1){
              $sqlr = "UPDATE `user` SET `balance` = balance + '$amount'  WHERE `chatid` = $balance3;";
              $conn->query($sqlr);
              $sqlw = "UPDATE `p` SET `status` =  '1'  WHERE `id` = '$id2';";
              $conn->query($sqlw);
                      $sqlq = "SELECT *FROM `user`WHERE `chatid` = '$balance3'";
$resultw = $conn->query($sqlq);
if ($resultw->num_rows > 0) {
$roww = $resultw->fetch_assoc();
          $balancecr=$roww['balance'];
    }
     $text=urlencode($balancecr."موجودی جدید");
    file_get_contents("https://api.telegram.org/$token_bot/sendMessage?chat_id=".$balance3."&text=".$text);
   $text=urlencode('پرداختی جدید'.$amount);
 file_get_contents("https://api.telegram.org/$token_bot/sendMessage?chat_id=126149424&text=".$text);
}
else{
 $text=urlencode('پرداخت ناموفق بود');
   file_get_contents("https://api.telegram.org/$token_bot/sendMessage?chat_id=".$balance3."&text=".$text);
}
}

   ?>