<?php
header('Content-Type: text/html; charset=utf-8');
include("conf.php");
include("jdf.php");
$message= file_get_contents("php://input");
$arrayMessage= json_decode($message, true);
$token= $token_bot;
$chat_id= $arrayMessage['message']['from']['id'];
@$user_phone = $arrayMessage['message']['contact']['phone_number'];
$command= $arrayMessage['message']['text'];
$user= $arrayMessage['message']['from']['username'];
$phone_number= $arrayMessage['message']['contact']['user_id'];
$code= $arrayMessage['callback_query']['data'];
$numnum=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=getNumbersStatus");
$numnumss=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=getBalance");
$textgetsms=file_get_contents("http://www.getsmscode.com/do.php?action=login&username=$getsmscode_user&token=$getsmscode_api_key");
$text2getsms=explode('|',$textgetsms);
$balagetsms= $text2getsms['1'];
$bl=explode(':',$numnumss);
 $bls=intval($bl['1']);
$numbertedad= json_decode($numnum, true);
$reza=(string)$command;
$test=explode('/p',$reza);
$test2=explode('/sms',$reza);
$test3=explode('/start ',$reza);
$test4=explode('/ch',$reza);
$test5=explode('/',$test4[1]);
 $rrr=$test5[0] ;
 //  text($test5[0],$jsonPoets,$token,$chat_id);
if($chat_id==$admin_chatid){
 text($message,$jsonPoets,$token,$chat_id);
      }
if(strlen($code)>5){
  $test2['1']=$code;
  $chat_id= $arrayMessage['callback_query']['from']['id'];
  $balancecr=balance($conn,$chat_id);
}
$othermethod='';
if(strlen($code)>11){
    $code1=explode('.',$code);
  $test2['1']=$code1['0'];
  $othermethod=$code1['1'];
  $chat_id= $arrayMessage['callback_query']['from']['id'];
  $balancecr=balance($conn,$chat_id);
  $balancecr2=balance2($conn,$chat_id);
}
$balancecr=balance($conn,$chat_id);
$qsd=rf($conn,$chat_id);
$php=str_split($user_phone);
if($qsd>1 and $user_phone>0){
    $id=$qsd;
$sql = "SELECT * FROM `refral` WHERE `chetidrf` = '$id' AND `chetidfr` = '$chat_id' ";
$result = $conn->query($sql);
if ($result->num_rows <= 0) {
    $sql = "SELECT * FROM `refral` WHERE `chetidrf` = '$chat_id' AND `chetidfr` = '$id' ";
$result = $conn->query($sql);
if ($result->num_rows <= 0) {
    $sql = "SELECT * FROM `refral` WHERE `chetidfr` = '$chat_id' ";
$result = $conn->query($sql);
 if ($result->num_rows <= 0) {
    if($id != $chat_id){
 $sql = "INSERT INTO `refral` (`chetidrf`, `chetidfr`) VALUES ('$id', '$chat_id');";
$conn->query($sql);
if($php['0']==9 and $php['1']==8){

$amount=100;
$amount2=200;
 $user_phonee=$user_phone;
}else{$amount=50;
$amount2=0;
 $user_phonee='';
}
         $sql = "UPDATE `user` SET `b2` = b2 + $amount WHERE `chatid` = $id;";
          $conn->query($sql);
                   $sql = "UPDATE `user` SET `balance` = balance + $amount2 WHERE `chatid` = $chat_id;";
          $conn->query($sql);
                             $sql = "UPDATE `user` SET `ph` =  $user_phonee WHERE `chatid` = $chat_id;";
          $conn->query($sql);
  $sql = "UPDATE `user` SET `rf` = rf + 1 WHERE `chatid` ='$id' ;";
$conn->query($sql);
  $sql = "UPDATE `user` SET `ider` = '1' WHERE `chatid` ='$chat_id' ;";
$conn->query($sql);
$ss=balance2($conn,$id);
 $text=urlencode("تبریک می گویم شما یک نفر را به ربات ما دعوت کردید ");
 $text2=urlencode("موجودی جدید امتیاز شما : ".$ss);
text($text,$jsonPoets,$token,$id);
text($text2,$jsonPoets,$token,$id);
 $text=urlencode("کاربر ".$user." شما با ایدی ".$chat_id." با موفقیت در ربات ثبت نام کردید ✅
با تشکر از حسن نیت شما برای انتخاب ما 💙
در صورت بروز هرگونه مشکل و سوال با ایدی : @teleFake_Admin و یا @fnum_bot تماس فرمایید 🔔
❕ پشتیبانی 24 ساعته و 7 روز هفته ❕

‼️توجه‼️
هرگونه سوء استفاده از این اکانت ها به عهده شخص استفاده کننده میباشد و گروه TeleFake هیچ مسئولیتی در قبال سوء استفاده مشتریان ندارد
‼️توجه‼️
فیلیپین 🇵🇭 💰4000 تومان 💰
کامبوج 🇰🇭 💰5000 تومان 💰
هنگ کنگ 🇭🇰 💰3500 تومان 💰
ماکائو 🇲🇴 💰3500 تومان 💰
اندونزی 🇮🇩 💰3000 تومان 💰
مصر 🇪🇬 💰5000 تومان 💰
مالزی 🇲🇾 💰6000 تومان 💰
فیلیپین 🇵🇭 💰3500 تومان 💰
میانمار 🇲🇲 💰6000 تومان 💰
ویتنام 🇻🇳 💰5000 تومان 💰
چین 🇨🇳 💰2000 تومان 💰
تایلند 🇹🇭💰4000 تومان 💰
استرلیا 🇦🇹 💰3500 تومان 💰
آفریقای جنوبی 🇿🇦💰4000 تومان 💰
انگلیس 🇬🇧 💰5000 تومان 💰

روش های پرداخت : 🔛 کارت به کارت 💳 و  درگاه پرداخت آنلاین 💵

شماره مجازی تلگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی اینستاگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی واتس اپ 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی وایبر 950  تومان 💰 - روسیه 🇷🇺 کد کشور +7
"."ای دی ثبت نام شما  :".$chat_id."
      ");
  $jsonPoets="";
text($text,$jsonPoets,$token,$chat_id);
$poets= array('keyboard' => array(array('تعرفه تبلیغات','دیدن تبلیغات + امتیاز رایگان'),array('Telegram', 'Instagram', 'WhatsApp', 'Viber'),array(" شماره تلگرام رایگان روسیه",'🔹 امتیاز 🔸'),array('💸 افزایش اعتبار 💸','💰 موجودی حساب شما 💰'),array('📧  راهنمای دریافت پیام (کُد) 📧','🔶 شماره رایگان 🔷'),array('شماره های خریداری شده')));
    $jsonPoets= json_encode($poets);
    $text= "یکی از کلید های زیر را انتخاب کنید";
  text($text,$jsonPoets,$token,$chat_id);
}}}}
}
if($command == 'رد کردن این مرحله'and $qsd>1){
    $id=$qsd;
$sql = "SELECT * FROM `refral` WHERE `chetidrf` = '$id' AND `chetidfr` = '$chat_id' ";
$result = $conn->query($sql);
if ($result->num_rows <= 0) {
    $sql = "SELECT * FROM `refral` WHERE `chetidrf` = '$chat_id' AND `chetidfr` = '$id' ";
$result = $conn->query($sql);
if ($result->num_rows <= 0) {
    $sql = "SELECT * FROM `refral` WHERE `chetidfr` = '$chat_id' ";
$result = $conn->query($sql);
 if ($result->num_rows <= 0) {
    if($id != $chat_id){
 $sql = "INSERT INTO `refral` (`chetidrf`, `chetidfr`) VALUES ('$id', '$chat_id');";
$conn->query($sql);

$amount=50;
         $sql = "UPDATE `user` SET `b2` = b2 + $amount WHERE `chatid` = $id;";
          $conn->query($sql);
  $sql = "UPDATE `user` SET `rf` = rf + 1 WHERE `chatid` ='$id' ;";
$conn->query($sql);
  $sql = "UPDATE `user` SET `ider` = '1' WHERE `chatid` ='$chat_id' ;";
$conn->query($sql);
$ss=balance2($conn,$id);
 $text=urlencode("تبریک می گویم شما یک نفر را به ربات ما دعوت کردید ");
 $text2=urlencode("موجودی جدید امتیاز شما : ".$ss);
text($text,$jsonPoets,$token,$id);
text($text2,$jsonPoets,$token,$id);
 $text=urlencode("کاربر ".$user." شما با ایدی ".$chat_id." با موفقیت در ربات ثبت نام کردید ✅
با تشکر از حسن نیت شما برای انتخاب ما 💙
در صورت بروز هرگونه مشکل و سوال با ایدی : @teleFake_Admin و یا @fnum_bot تماس فرمایید 🔔
❕ پشتیبانی 24 ساعته و 7 روز هفته ❕

‼️توجه‼️
هرگونه سوء استفاده از این اکانت ها به عهده شخص استفاده کننده میباشد و گروه TeleFake هیچ مسئولیتی در قبال سوء استفاده مشتریان ندارد
‼️توجه‼️
فیلیپین 🇵🇭 💰4000 تومان 💰
کامبوج 🇰🇭 💰5000 تومان 💰
هنگ کنگ 🇭🇰 💰3500 تومان 💰
ماکائو 🇲🇴 💰3500 تومان 💰
اندونزی 🇮🇩 💰3000 تومان 💰
مصر 🇪🇬 💰5000 تومان 💰
مالزی 🇲🇾 💰6000 تومان 💰
فیلیپین 🇵🇭 💰3500 تومان 💰
میانمار 🇲🇲 💰6000 تومان 💰
ویتنام 🇻🇳 💰5000 تومان 💰
چین 🇨🇳 💰2000 تومان 💰
تایلند 🇹🇭💰4000 تومان 💰
استرلیا 🇦🇹 💰3500 تومان 💰
آفریقای جنوبی 🇿🇦💰4000 تومان 💰
انگلیس 🇬🇧 💰5000 تومان 💰

روش های پرداخت : 🔛 کارت به کارت 💳 و  درگاه پرداخت آنلاین 💵

شماره مجازی تلگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی اینستاگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی واتس اپ 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی وایبر 950  تومان 💰 - روسیه 🇷🇺 کد کشور +7
"."ای دی ثبت نام شما  :".$chat_id."
      ");
  $jsonPoets="";
text($text,$jsonPoets,$token,$chat_id);
$poets= array('keyboard' => array(array('تعرفه تبلیغات','دیدن تبلیغات + امتیاز رایگان'),array('Telegram', 'Instagram', 'WhatsApp', 'Viber'),array(" شماره تلگرام رایگان روسیه",'🔹 امتیاز 🔸'),array('💸 افزایش اعتبار 💸','💰 موجودی حساب شما 💰'),array('📧  راهنمای دریافت پیام (کُد) 📧','🔶 شماره رایگان 🔷'),array('شماره های خریداری شده')));
    $jsonPoets= json_encode($poets);
    $text= "یکی از کلید های زیر را انتخاب کنید";
  text($text,$jsonPoets,$token,$chat_id);
}}}}
}
$poets= array('keyboard' => array(array('تعرفه تبلیغات','دیدن تبلیغات + امتیاز رایگان'),array('Telegram', 'Instagram', 'WhatsApp', 'Viber'),array(" شماره تلگرام رایگان روسیه",'🔹 امتیاز 🔸'),array('💸 افزایش اعتبار 💸','💰 موجودی حساب شما 💰'),array('📧  راهنمای دریافت پیام (کُد) 📧','🔶 شماره رایگان 🔷'),array('شماره های خریداری شده')));
 $jsonPoets= json_encode($poets);
$hide_keyboard= json_encode(array('hide_keyboard' => true));
if($command == '/start'){

$sql = "SELECT *FROM `user`WHERE `chatid` = '$chat_id'";
$result = $conn->query($sql);
if ($result->num_rows <= 0) {
$sql = "INSERT INTO `user` (`username`, `chatid`, `balance`, `rf`) VALUES ('$user',  '$chat_id', '0', '0');";
$conn->query($sql);

     }
     $text=urlencode("کاربر ".$user." شما با ایدی ".$chat_id." با موفقیت در ربات ثبت نام کردید ✅
با تشکر از حسن نیت شما برای انتخاب ما 💙
در صورت بروز هرگونه مشکل و سوال با ایدی : @teleFake_Admin و یا @fnum_bot تماس فرمایید 🔔
❕ پشتیبانی 24 ساعته و 7 روز هفته ❕

‼️توجه‼️
هرگونه سوء استفاده از این اکانت ها به عهده شخص استفاده کننده میباشد و گروه TeleFake هیچ مسئولیتی در قبال سوء استفاده مشتریان ندارد
‼️توجه‼️
فیلیپین 🇵🇭 💰4000 تومان 💰
کامبوج 🇰🇭 💰5000 تومان 💰
هنگ کنگ 🇭🇰 💰3500 تومان 💰
ماکائو 🇲🇴 💰3500 تومان 💰
اندونزی 🇮🇩 💰3000 تومان 💰
مصر 🇪🇬 💰5000 تومان 💰
مالزی 🇲🇾 💰6000 تومان 💰
فیلیپین 🇵🇭 💰3500 تومان 💰
میانمار 🇲🇲 💰6000 تومان 💰
ویتنام 🇻🇳 💰5000 تومان 💰
چین 🇨🇳 💰2000 تومان 💰
تایلند 🇹🇭💰4000 تومان 💰
استرلیا 🇦🇹 💰3500 تومان 💰
آفریقای جنوبی 🇿🇦💰4000 تومان 💰
انگلیس 🇬🇧 💰5000 تومان 💰

روش های پرداخت : 🔛 کارت به کارت 💳 و  درگاه پرداخت آنلاین 💵

شماره مجازی تلگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی اینستاگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی واتس اپ 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی وایبر 950  تومان 💰 - روسیه 🇷🇺 کد کشور +7
"."ای دی ثبت نام شما  :".$chat_id."
      ");
  $jsonPoets="";
text($text,$jsonPoets,$token,$chat_id);
$poets= array('keyboard' => array(array('تعرفه تبلیغات','دیدن تبلیغات + امتیاز رایگان'),array('Telegram', 'Instagram', 'WhatsApp', 'Viber'),array(" شماره تلگرام رایگان روسیه",'🔹 امتیاز 🔸'),array('💸 افزایش اعتبار 💸','💰 موجودی حساب شما 💰'),array('📧  راهنمای دریافت پیام (کُد) 📧','🔶 شماره رایگان 🔷'),array('شماره های خریداری شده')));
    $jsonPoets= json_encode($poets);
    $text= "یکی از کلید های زیر را انتخاب کنید";
  text($text,$jsonPoets,$token,$chat_id);
}else if($command == '/aboutus'){
    $text= "telefake.ir";
text($text,$jsonPoets,$token,$chat_id);
}else if($command == 'شماره های خریداری شده'){
              $sql = "SELECT number,m,timetoend FROM `num` WHERE `chatid` = '$chat_id' ORDER BY `id` DESC ";
$result = $conn->query($sql);
while($row=$result->fetch_array()){
$numb=$row['number'];
$m=$row['m'];
if($m==1){
$t='شماره استفاده شده است';
}else{$t='شماره استفاده نشده و یا پول پس داده نشده';  }
$timetoend=$row['timetoend'];
    $text=urlencode("شماره :  $numb
    وضعیت: $t
    آخرین تاریخ:".jdate("H:i:s j/n/Y",$timetoend));
  text($text,$jsonPoets,$token,$chat_id);

}
}else if($command == '/buy'){
         $text=urlencode("کاربر 👤".$user." ایدی شما 🆔 ".$chat_id."
با تشکر از حسن نیت شما برای انتخاب ما 💙
در صورت بروز هرگونه مشکل و سوال با ایدی : @teleFake_Admin و یا @fnum_bot تماس فرمایید 🔔
❕ پشتیبانی 24 ساعته و 7 روز هفته ❕

‼️توجه‼️
هرگونه سوء استفاده از این اکانت ها به عهده شخص استفاده کننده میباشد و گروه TeleFake هیچ مسئولیتی در قبال سوء استفاده مشتریان ندارد
‼️توجه‼️
فیلیپین 🇵🇭 💰4000 تومان 💰
کامبوج 🇰🇭 💰5000 تومان 💰
هنگ کنگ 🇭🇰 💰3500 تومان 💰
ماکائو 🇲🇴 💰3500 تومان 💰
اندونزی 🇮🇩 💰3000 تومان 💰
مصر 🇪🇬 💰5000 تومان 💰
مالزی 🇲🇾 💰6000 تومان 💰
فیلیپین 🇵🇭 💰3500 تومان 💰
میانمار 🇲🇲 💰6000 تومان 💰
ویتنام 🇻🇳 💰5000 تومان 💰
چین 🇨🇳 💰2000 تومان 💰
تایلند 🇹🇭💰4000 تومان 💰
استرلیا 🇦🇹 💰3500 تومان 💰
آفریقای جنوبی 🇿🇦💰4000 تومان 💰
انگلیس 🇬🇧 💰5000 تومان 💰

روش های پرداخت : 🔛 کارت به کارت 💳 و  درگاه پرداخت آنلاین 💵

شماره مجازی تلگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی اینستاگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی واتس اپ 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی وایبر 950  تومان 💰 - روسیه 🇷🇺 کد کشور +7
"."ای دی ثبت نام شما  :".$chat_id."
      ");
  $jsonPoets="";
text($text,$jsonPoets,$token,$chat_id);
$poets= array('keyboard' => array(array('تعرفه تبلیغات','دیدن تبلیغات + امتیاز رایگان'),array('Telegram', 'Instagram', 'WhatsApp', 'Viber'),array(" شماره تلگرام رایگان روسیه",'🔹 امتیاز 🔸'),array('💸 افزایش اعتبار 💸','💰 موجودی حساب شما 💰'),array('📧  راهنمای دریافت پیام (کُد) 📧','🔶 شماره رایگان 🔷'),array('شماره های خریداری شده')));
 $jsonPoets= json_encode($poets);
  $text= "یکی از کلید های زیر را انتخاب کنید";
  text($text,$jsonPoets,$token,$chat_id);
}
 else if($command == 'بازگشت'){
         $text=urlencode("کاربر 👤".$user." ایدی شما 🆔 ".$chat_id."
با تشکر از حسن نیت شما برای انتخاب ما 💙
در صورت بروز هرگونه مشکل و سوال با ایدی : @teleFake_Admin و یا @fnum_bot تماس فرمایید 🔔
❕ پشتیبانی 24 ساعته و 7 روز هفته ❕

‼️توجه‼️
هرگونه سوء استفاده از این اکانت ها به عهده شخص استفاده کننده میباشد و گروه TeleFake هیچ مسئولیتی در قبال سوء استفاده مشتریان ندارد
‼️توجه‼️

فیلیپین 🇵🇭 💰4000 تومان 💰
کامبوج 🇰🇭 💰5000 تومان 💰
هنگ کنگ 🇭🇰 💰3500 تومان 💰
ماکائو 🇲🇴 💰3500 تومان 💰
اندونزی 🇮🇩 💰3000 تومان 💰
مصر 🇪🇬 💰5000 تومان 💰
مالزی 🇲🇾 💰6000 تومان 💰
فیلیپین 🇵🇭 💰3500 تومان 💰
میانمار 🇲🇲 💰6000 تومان 💰
ویتنام 🇻🇳 💰5000 تومان 💰
چین 🇨🇳 💰2000 تومان 💰
تایلند 🇹🇭💰4000 تومان 💰
استرلیا 🇦🇹 💰3500 تومان 💰
آفریقای جنوبی 🇿🇦💰4000 تومان 💰
انگلیس 🇬🇧 💰5000 تومان 💰

روش های پرداخت : 🔛 کارت به کارت 💳 و  درگاه پرداخت آنلاین 💵

شماره مجازی تلگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی اینستاگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی واتس اپ 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی وایبر 950  تومان 💰 - روسیه 🇷🇺 کد کشور +7
"."ای دی ثبت نام شما  :".$chat_id."
      ");
$poets= array('keyboard' => array(array('تعرفه تبلیغات','دیدن تبلیغات + امتیاز رایگان'),array('Telegram', 'Instagram', 'WhatsApp', 'Viber'),array(" شماره تلگرام رایگان روسیه",'🔹 امتیاز 🔸'),array('💸 افزایش اعتبار 💸','💰 موجودی حساب شما 💰'),array('📧  راهنمای دریافت پیام (کُد) 📧','🔶 شماره رایگان 🔷'),array('شماره های خریداری شده')));
$jsonPoets= json_encode($poets);
text($text,$jsonPoets,$token,$chat_id);
  $text= "یکی از کلید های زیر را انتخاب کنید";
  text($text,$jsonPoets,$token,$chat_id);
}
/////////////////////////////////////////////////////////////
else if($command == 'تعرفه تبلیغات'){
    $text555=urlencode("برای ارسال هر عضو واقعی به کانال تلگرام شما به شرح زیر می باشد
    هر عضو 50 تومن می باشد
    کمترین میزان درخواست 100 عضو می باشد
    بالای 300 عضو هر عضو 45 حساب می شود
       برای سفارش تبلیغ با ادمین ها در ارتباط باشید           ");
    text($text555,$jsonPoets,$token,$chat_id);
    }
    /////////////////////////////////////////////////////////////
else if($command =='دیدن تبلیغات   امتیاز رایگان'){
    $text555=urlencode("برای استفاده از این بخش از کلید های داخل منو پایین یکی از کانال ها رو انتخاب کرده و داخل کانال از طریق لینک عضو شوید و دوباره روی همون کلید که مربوط کانل بوده کلیک کنید

    ");
          $sql = "SELECT *FROM `cht` WHERE `teda` > 0";

$result = $conn->query($sql);
$i=1;
$poets['keyboard'][0]=array('بازگشت');
if ($result->num_rows > 0) {
    while($row = $result->fetch_array()){

     $poets['keyboard'][$i]=array("/ch".$row['idch']."/تعداد: ".$row['teda']);
     $i++;
    }
    }
    $jsonPoets= json_encode($poets);
    text($text555,$jsonPoets,$token,$chat_id);
    }
    ///////////////////////////////////////////////

else if(strlen($test5[0])>1 or strpos($command,'/ch')>0){
    $id=$test5[0];
              $sql = "SELECT *FROM `cht` WHERE `teda` > 0";

$result = $conn->query($sql);
$i=1;
$poets['keyboard'][0]=array('بازگشت');
if ($result->num_rows > 0) {
    while($row = $result->fetch_array()){

     $poets['keyboard'][$i]=array("/ch".$row['idch']."/تعداد: ".$row['teda']);
     $i++;
    }
    }
$sql = "SELECT *FROM `cht` WHERE `teda` > 0 and idch= '$id'";
$result = $conn->query($sql);
$row=$result->fetch_assoc()  ;
$name1= $row['name'];
$name2= $row['linkjoin'];
$name3= $row['id'];



               $text555=urlencode('اسم کانال:'.$name1.

    'لینک کانال:'.$name2);
    $jsonPoets= json_encode($poets);

    text($text555,$jsonPoets,$token,$chat_id);
 $url= "https://api.telegram.org/bot".$token."/getChatMember?chat_id=".$id."&user_id=".$chat_id;
    $t=file_get_contents($url);
    $arrayMessage= json_decode($t, true);
      $ids=$arrayMessage['result']['user']['id'];
      if($ids==$chat_id){
         $sql = "SELECT *FROM `chj` WHERE  ci= '$chat_id' and ij='$name3'";
$result = $conn->query($sql);
$row=$result->num_rows;
if($row<=0){
                $sql = "INSERT INTO `chj` (`ci`, `ij`) VALUES ('$chat_id', '$name3');";
$result = $conn->query($sql);
          $sql = "UPDATE `cht` SET `teda` = teda - 1  WHERE `id` = $name3;";
          $conn->query($sql);
                    $sql = "UPDATE `user` SET `b2` = b2 + 100  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
          $text555s=urlencode('تبریک به حساب شما 100 امتیاز اضافه شد'.
          'در صورت خروج از کانال 200 امتیاز از شما کم می شود')    ;
          text($text555s,$jsonPoets,$token,$chat_id);
      }  }
}
////////////////////////////////////////////////////////////
else if($command == "🇨🇳 چین"){
  $message2=  file_get_contents("http://www.getsmscode.com/do.php?action=getmobile&username=$getsmscode_user&token=$getsmscode_api_key&pid=10");

 if( $balagetsms >= 0.135 and strlen($message2)>11 and strpos($message2,'Message')<1 and 'Message|balance is not enough!'!=$message2 and 'Message|unavailable'!=$message2 and 'Message|Issue,Try later'!=$message2){
          $balance=balance($conn,$chat_id);
      if($balance>=2000){
          $sql = "UPDATE `user` SET `balance` = balance - 2000  WHERE `chatid` = $chat_id;";
          $conn->query($sql);

     $text555=urlencode('وضعیت:شماره فعال
      شماره شما :'.$message2."
      نوع شماره:Telegram
      کشور: چین
      شما از حالا 6 دقیقه وقت دارید تا از شماره استفاده کنید در غیر این صورت پول به حساب شما بازگشت می خورد
      🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 10 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1='';
     $a2=$message2;
     $a3=$message2;
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
     text($text555s,"",$token,$chat_id);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2.'.'.'ch'))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`) VALUES ('$chat_id', '$a3', '$a2', '$a1');";
$conn->query($sql);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
//////////////////////////////////////////////////////////////
elseif($command == "شماره تلگرام رایگان روسیه"){
 if($numbertedad['tg_0']>5 and $bl['1']>=1.8){
          $balance=balance2($conn,$chat_id);
      if($balance>=2000){
          $sql = "UPDATE `user` SET `b2` = b2 - 2000  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
   $message2=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=getNumber&service=tg&country=ru");
    $num=explode(':',$message2);
     $text555=urlencode('وضعیت:شماره فعال
      شماره شما :'.$num['2']."
      نوع شماره:Telegram
            کشور: روسیه
            🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 20 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1=$num['0'];
     $a2=$num['1'];
     $a3=$num['2'];

       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2.'.'.'trf'))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`) VALUES ('$chat_id', '$a3', '$a2', '$a1');";
$conn->query($sql);
$message3=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=setStatus&status=1&id=".$num['1']);
     }else{
              $text555=urlencode("موجودی دوم شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
//////////////////////////////////////////////////////////////
else if($command == "🇪🇬 مصر"){
 $message2=  file_get_contents("http://www.getsmscode.com/vndo.php?action=getmobile&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&cocode=eg");
if( $balagetsms >= 0.4 and strlen($message2)>11 and strpos($message2,'Message')<1 and 'Message|balance is not enough!'!=$message2 and 'Message|unavailable'!=$message2 and 'Message|Issue,Try later'!=$message2){
          $balance=balance($conn,$chat_id);

      if($balance>=5000){

          $sql = "UPDATE `user` SET `balance` = balance - 5000  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
     $text555=urlencode('وضعیت:شماره فعال
      شماره شما :'.$message2."
      نوع شماره:Telegram
      کشور: مصر
      شما از حالا 3 دقیقه وقت دارید تا از شماره استفاده کنید در غیر این صورت پول به حساب شما بازگشت می خورد
       🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 10 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1='';
     $a2=$message2;
     $a3=$message2;
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
     text($text555s,"",$token,$chat_id);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2.'.'.'eg'))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
$time=time()+360;
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`, `buytime`) VALUES ('$chat_id', '$a3', '$a2', '$a1', '$time');";
$conn->query($sql);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
//////////////////////////////////////////////////////////////
else if($command == "🇲🇾 مالزی"){
 $message2=  file_get_contents("http://www.getsmscode.com/vndo.php?action=getmobile&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&cocode=my");
if( $balagetsms >= 0.7 and strlen($message2)>11 and strpos($message2,'Message')<1 and 'Message|balance is not enough!'!=$message2 and 'Message|unavailable'!=$message2 and 'Message|Issue,Try later'!=$message2){
          $balance=balance($conn,$chat_id);

      if($balance>=6000){

          $sql = "UPDATE `user` SET `balance` = balance - 6000  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
     $text555=urlencode('وضعیت:شماره فعال
      شماره شما :'.$message2."
      نوع شماره:Telegram
      کشور: مالزی
      شما از حالا 3 دقیقه وقت دارید تا از شماره استفاده کنید در غیر این صورت پول به حساب شما بازگشت می خورد
      🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 10 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1='';
     $a2=$message2;
     $a3=$message2;
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
     text($text555s,"",$token,$chat_id);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2.'.'.'my'))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
$time=time()+360;
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`, `buytime`) VALUES ('$chat_id', '$a3', '$a2', '$a1', '$time');";
$conn->query($sql);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
//////////////////////////////////////////////////////////////
else if($command == "🇮🇩 اندونزی"){
 $message2=  file_get_contents("http://www.getsmscode.com/vndo.php?action=getmobile&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&cocode=id");
if( $balagetsms >= 0.2 and strlen($message2)>11 and strpos($message2,'Message')<1 and 'Message|balance is not enough!'!=$message2 and 'Message|unavailable'!=$message2 and 'Message|Issue,Try later'!=$message2){
          $balance=balance($conn,$chat_id);

      if($balance>=3000){

          $sql = "UPDATE `user` SET `balance` = balance - 3000  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
     $text555=urlencode('وضعیت:شماره فعال
      شماره شما :'.$message2."
      نوع شماره:Telegram
      کشور: اندونزی
      شما از حالا 3 دقیقه وقت دارید تا از شماره استفاده کنید در غیر این صورت پول به حساب شما بازگشت می خورد
      🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 10 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1='';
     $a2=$message2;
     $a3=$message2;
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
     text($text555s,"",$token,$chat_id);

       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2.'.'.'id'))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
$time=time()+360;
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`, `buytime`) VALUES ('$chat_id', '$a3', '$a2', '$a1', '$time');";
$conn->query($sql);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
//////////////////////////////////////////////////////////////
else if($command == "🇰🇭 کامبوج"){
 $message2=  file_get_contents("http://www.getsmscode.com/vndo.php?action=getmobile&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&cocode=kh");
if( $balagetsms >= 0.3 and strlen($message2)>11 and strpos($message2,'Message')<1 and 'Message|balance is not enough!'!=$message2 and 'Message|unavailable'!=$message2 and 'Message|Issue,Try later'!=$message2){
          $balance=balance($conn,$chat_id);

      if($balance>=3500){

          $sql = "UPDATE `user` SET `balance` = balance - 3500  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
     $text555=urlencode('وضعیت:شماره فعال
      شماره شما :'.$message2."
      نوع شماره:Telegram
      کشور: کامبوج
      شما از حالا 3 دقیقه وقت دارید تا از شماره استفاده کنید در غیر این صورت پول به حساب شما بازگشت می خورد
      🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 10 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1='';
     $a2=$message2;
     $a3=$message2;
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
     text($text555s,"",$token,$chat_id);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2.'.'.'kh'))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
$time=time()+360;
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`, `buytime`) VALUES ('$chat_id', '$a3', '$a2', '$a1', '$time');";
$conn->query($sql);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
//////////////////////////////////////////////////////////////
else if($command == '🇭🇰 هنگ کونگ'){
 $message2=  file_get_contents("http://www.getsmscode.com/vndo.php?action=getmobile&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&cocode=hk");
if( $balagetsms >= 0.3 and strlen($message2)>11 and strpos($message2,'Message')<1 and 'Message|balance is not enough!'!=$message2 and 'Message|unavailable'!=$message2 and 'Message|Issue,Try later'!=$message2){
          $balance=balance($conn,$chat_id);

      if($balance>=3500){

          $sql = "UPDATE `user` SET `balance` = balance - 3500  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
     $text555=urlencode('وضعیت:شماره فعال
      شماره شما :'.$message2."
      نوع شماره:Telegram
      کشور:  هنگ کونگ
      شما از حالا 3 دقیقه وقت دارید تا از شماره استفاده کنید در غیر این صورت پول به حساب شما بازگشت می خورد
      🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 10 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1='';
     $a2=$message2;
     $a3=$message2;
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
     text($text555s,"",$token,$chat_id);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2.'.'.'hk'))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
$time=time()+360;
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`, `buytime`) VALUES ('$chat_id', '$a3', '$a2', '$a1', '$time');";
$conn->query($sql);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
//////////////////////////////////////////////////////////////
else if($command == '🇲🇴 ماکاو'){
 $message2=  file_get_contents("http://www.getsmscode.com/vndo.php?action=getmobile&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&cocode=mo");
if( $balagetsms >= 0.3 and strlen($message2)>11 and strpos($message2,'Message')<1 and 'Message|balance is not enough!'!=$message2 and 'Message|unavailable'!=$message2 and 'Message|Issue,Try later'!=$message2){
          $balance=balance($conn,$chat_id);

      if($balance>=3500){

          $sql = "UPDATE `user` SET `balance` = balance - 3500  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
     $text555=urlencode('وضعیت:شماره فعال
      شماره شما :'.$message2."
      نوع شماره:Telegram
      کشور: ماکاو
      شما از حالا 3 دقیقه وقت دارید تا از شماره استفاده کنید در غیر این صورت پول به حساب شما بازگشت می خورد
      🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 10 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1='';
     $a2=$message2;
     $a3=$message2;
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
     text($text555s,"",$token,$chat_id);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2.'.'.'mo'))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
$time=time()+360;
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`, `buytime`) VALUES ('$chat_id', '$a3', '$a2', '$a1', '$time');";
$conn->query($sql);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
//////////////////////////////////////////////////////////////
else if($command == '🇵🇭 فیلیپین'){
 $message2=  file_get_contents("http://www.getsmscode.com/vndo.php?action=getmobile&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&cocode=ph");
if( $balagetsms >= 0.3 and strlen($message2)>11 and strpos($message2,'Message')<1 and 'Message|balance is not enough!'!=$message2 and 'Message|unavailable'!=$message2 and 'Message|Issue,Try later'!=$message2){
          $balance=balance($conn,$chat_id);

      if($balance>=3500){

          $sql = "UPDATE `user` SET `balance` = balance - 3500  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
     $text555=urlencode('وضعیت:شماره فعال
      شماره شما :'.$message2."
      نوع شماره:Telegram
      کشور: فیلیپین
      شما از حالا 3 دقیقه وقت دارید تا از شماره استفاده کنید در غیر این صورت پول به حساب شما بازگشت می خورد
      🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 10 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1='';
     $a2=$message2;
     $a3=$message2;
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
     text($text555s,"",$token,$chat_id);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2.'.'.'ph'))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
$time=time()+360;
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`, `buytime`) VALUES ('$chat_id', '$a3', '$a2', '$a1', '$time');";
$conn->query($sql);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
//////////////////////////////////////////////////////////////
else if($command == '🇲🇲 میانمار'){
 $message2=  file_get_contents("http://www.getsmscode.com/vndo.php?action=getmobile&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&cocode=mm");
if( $balagetsms >= 0.7 and strlen($message2)>11 and strpos($message2,'Message')<1 and 'Message|balance is not enough!'!=$message2 and 'Message|unavailable'!=$message2 and 'Message|Issue,Try later'!=$message2){
          $balance=balance($conn,$chat_id);

      if($balance>=6000){

          $sql = "UPDATE `user` SET `balance` = balance - 6000  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
     $text555=urlencode('وضعیت:شماره فعال
      شماره شما :'.$message2."
      نوع شماره:Telegram
      کشور: میانمار
      شما از حالا 3 دقیقه وقت دارید تا از شماره استفاده کنید در غیر این صورت پول به حساب شما بازگشت می خورد
      🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 10 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1='';
     $a2=$message2;
     $a3=$message2;
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
     text($text555s,"",$token,$chat_id);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2.'.'.'mm'))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
$time=time()+360;
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`, `buytime`) VALUES ('$chat_id', '$a3', '$a2', '$a1', '$time');";
$conn->query($sql);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
//////////////////////////////////////////////////////////////
else if($command == '🇻🇳 ویتنام'){
 $message2=  file_get_contents("http://www.getsmscode.com/vndo.php?action=getmobile&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&cocode=vn");
if( $balagetsms >= 0.4 and strlen($message2)>11 and strpos($message2,'Message')<1 and 'Message|balance is not enough!'!=$message2 and 'Message|unavailable'!=$message2 and 'Message|Issue,Try later'!=$message2){
          $balance=balance($conn,$chat_id);

      if($balance>=4000){

          $sql = "UPDATE `user` SET `balance` = balance - 4000  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
     $text555=urlencode('وضعیت:شماره فعال
      شماره شما :'.$message2."
      نوع شماره:Telegram
      کشور: ویتنام
      شما از حالا 3 دقیقه وقت دارید تا از شماره استفاده کنید در غیر این صورت پول به حساب شما بازگشت می خورد
      🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 10 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1='';
     $a2=$message2;
     $a3=$message2;

          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
     text($text555s,"",$token,$chat_id); 
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2.'.'.'vn'))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
$time=time()+360;
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`, `buytime`) VALUES ('$chat_id', '$a3', '$a2', '$a1', '$time');";
$conn->query($sql);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
//////////////////////////////////////////////////////////////
else if($command == "🇷🇺 روسیه"){
    if($numbertedad['tg_0']>500000 and $bl['1']>=1.8){
          $balance=balance($conn,$chat_id);
      if($balance>=950){

   $message2=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=getNumber&service=tg&country=ru");
    if($message2!="NO_NUMBER"){
    $sql = "UPDATE `user` SET `balance` = balance - 950  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
   $num=explode(':',$message2);
     $text555=urlencode('وضعیت:شماره فعال
     کد پرداخت :'."/sms".$num['1'].'
      شماره شما :'.$num['2']."
      نوع شماره:Telegram
            کشور: روسیه
       🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 20 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1=$num['0'];
     $a2=$num['1'];
     $a3=$num['2'];
     $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
text($text555s,"",$token,$chat_id);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);

     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`) VALUES ('$chat_id', '$a3', '$a2', '$a1');";
$conn->query($sql);
$message3=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=setStatus&status=1&id=".$num['1']);
     }else{ $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);}}else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }
        else{
              $text555=urlencode("موجود نمی باشد");
text($text555,'',$token,$chat_id);
  }
  }
  else if($command == "Telegram"){
 $poets= array('keyboard' => array(array('🇷🇺 روسیه','🇨🇳 چین', '🇪🇬 مصر', '🇲🇾 مالزی'),array('🇰🇭 کامبوج','🇭🇰 هنگ کونگ','🇲🇴 ماکاو', '🇮🇩 اندونزی'),array('🇵🇭 فیلیپین','🇲🇲 میانمار','🇻🇳 ویتنام'),array('بازگشت')));
 $jsonPoets= json_encode($poets);
     $text555="کشور مورد نظر را انتخاب کنید";
 text($text555,$jsonPoets,$token,$chat_id);
  }
        /////////////////////////////////////////////////////////////////
        else if($command == "Instagram" and $bl['1']>=4){
            if($numbertedad['ig_0']>5){
$balance=balance($conn,$chat_id);
      if($balance>=950){
          $sql = "UPDATE `user` SET `balance` = balance - 950  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
   $message2=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=getNumber&service=ig&country=ru");
    $num=explode(':',$message2);
     $text555=urlencode('وضعیت:شماره فعال
     کد پرداخت :'."/sms".$num['1'].'
      شماره شما :'.$num['2']."
         نوع شماره:Instagram
                کشور: روسیه
                🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 20 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1=$num['0'];
     $a2=$num['1'];
     $a3=$num['2'];
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`) VALUES ('$chat_id', '$a3', '$a2', '$a1');";
$conn->query($sql);
$message3=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=setStatus&status=1&id=".$num['1']);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
       }else{
              $text555=urlencode("موجود نمی باشد");
text($text555,$jsonPoets,$token,$chat_id);
            }
             }
        ///////////////////////////////////////////////////////////////////////////
        else if($command == "WhatsApp"){
            if($numbertedad['wa_0']>5 and $bl['1']>=0.9){
$balance=balance($conn,$chat_id);
      if($balance>=950){
          $sql = "UPDATE `user` SET `balance` = balance - 950  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
   $message2=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=getNumber&service=wa&country=ru");
    $num=explode(':',$message2);
     $text555=urlencode('وضعیت:شماره فعال
     کد پرداخت :'."/sms".$num['1'].'
      شماره شما :'.$num['2']."
         نوع شماره:WhatsApp
                کشور: روسیه
                🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 20 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1=$num['0'];
     $a2=$num['1'];
     $a3=$num['2'];
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`) VALUES ('$chat_id', '$a3', '$a2', '$a1');";
$conn->query($sql);
$message3=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=setStatus&status=1&id=".$num['1']);
     } else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 } }else{
              $text555=urlencode("موجود نمی باشد");
text($text555,$jsonPoets,$token,$chat_id);      }
        }
        ////////////////////////////////////////////////////////////
        else if($command == "Viber"){
            if($numbertedad['fb_0']>5 and $bl['1']>=3){
$balance=balance($conn,$chat_id);
      if($balance>=950){
          $sql = "UPDATE `user` SET `balance` = balance - 950  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
   $message2=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=getNumber&service=vr&country=ru");
    $num=explode(':',$message2);
     $text555=urlencode('وضعیت:شماره فعال
     کد پرداخت :'."/sms".$num['1'].'
      شماره شما :'.$num['2']."
         نوع شماره:Viber
                کشور: روسیه
                🛑در صورت دریافت نشدن کد برای بازگشت پول بعد از مدت 20 دقیقه از خرید روی کلید گرفتن کد کلیک کنید🛑
      "
     );
     $a1=$num['0'];
     $a2=$num['1'];
     $a3=$num['2'];
          $fg=balance($conn,$chat_id);
     $text555s=urlencode("موجودی جدید شما:".$fg);
       $poste=array('inline_keyboard'=>array(array(array('text'=>"گرفتن کد",'callback_data'=>$a2))));
         $jsonPoets= json_encode($poste);
text($text555,$jsonPoets,$token,$chat_id);
     $sql = "INSERT INTO `num` (`chatid`, `number`, `orderid`, `Status`) VALUES ('$chat_id', '$a3', '$a2', '$a1');";
$conn->query($sql);
            $message3=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=setStatus&status=1&id=".$num['1']);
     }else{
              $text555=urlencode("موجودی شما کافی نیست");
text($text555,$jsonPoets,$token,$chat_id);
 }
        }else{
              $text555=urlencode("موجود نمی باشد");
text($text555,$jsonPoets,$token,$chat_id);
 }
 }
 /////////////////////////////////////////////////////////////////
else if($command == "📧  راهنمای دریافت پیام (کُد) 📧"){
    $text=urlencode("برای دریافت شماره و کد طبق آموزش زیر عمل کنید :

🔷 ابتدا باید حساب شما موجودی به اندازه هر شماره داشته باشد 🔷

1️⃣ سپس با توجه به اکانت مورد نیاز خود دکمه مورد نظر را وارد کنید

2️⃣ دراین مرحله شماره شما در وضعیت فعال قرار گرفته و ابتدا شماره را در نرم افزار واردکرده و سپس کد پرداخت خود را بعد از زمان تقریبی 30 ثانیه در ربات وارد کنید.

3️⃣ در مرحله اخر از اکانت خود لذت ببرید😊

🔷در صورت نیاز به راهنمایی بیشتر میتوانید این ویدیو رو نیز مشاهده فرمایید https://goo.gl/Gi92mh 🔷
");
text($text,$jsonPoets,$token,$chat_id);
}
else if($test2['1'] > 0){
       $numf =$test2['1'];

    if((empty($othermethod) or $othermethod=='trf') and strlen($numf)<11){

                $sqla = "SELECT *FROM `num`WHERE `orderid` = '$numf'";
$resulta = $conn->query($sqla);
if ($resulta->num_rows > 0) {
$rowa = $resulta->fetch_assoc();
          $Status=$rowa['Status'];
          $m=$rowa['m'];
          $time=time();
          $t2=$rowa['timetoend'];
          if($m!=1 and $t2<=$time){

                $text2a= $Status;
         $numya=explode(':',$Status);
          $message2=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=getStatus&id=".$numf);
          $text2= $message2;
         $numy=explode(':',$message2);
          if($numya['0']!='STATUS_OK'){  if($numy['0']=='STATUS_OK'){
  if($othermethod=='trf'){sqlrun2($conn,$chat_id,0,$message2,$numf,$balancecr2);}else{sqlrun($conn,$chat_id,0,$message2,$numf,$balancecr);}
                $message4=  file_get_contents("http://api.getsms.online/stubs/handler_api.php?api_key=$getsmsonline_api_key&action=setStatus&status=6&id=".$numf);
$texte1=urlencode("کد شما:" .$numy['1']);
text($texte1,$jsonPoets,$token,$chat_id);
   }
   }
                if($numya['0']!='STATUS_ACCESS'){  if($numy['0']=='STATUS_ACCESS'){
                    $texte1=urlencode("کد شما:" .$numy['1']);
  if($othermethod=='trf'){sqlrun2($conn,$chat_id,0,$message2,$numf,$balancecr2);}else{sqlrun($conn,$chat_id,0,$message2,$numf,$balancecr);}
text($text2,$jsonPoets,$token,$chat_id);
} }
                    if($Status!='NO_ACTIVATION'){   if($message2=='NO_ACTIVATION'){
                        $texte1=urlencode("✳️ موجودی به حساب شما بازگشت ✳️");
                          if($othermethod=='trf'){sqlrun2($conn,$chat_id,950,$message2,$numf,$balancecr2);}else{sqlrun($conn,$chat_id,950,$message2,$numf,$balancecr);}

text($texte1,$jsonPoets,$token,$chat_id);
          }  }
         if($Status!='STATUS_CANCEL'){ if($message2 == 'STATUS_CANCEL'){
     $texte1=urlencode("✳️ موجودی به حساب شما بازگشت ✳️");
   if($othermethod=='trf'){sqlrun2($conn,$chat_id,950,$message2,$numf,$balancecr2);}else{sqlrun($conn,$chat_id,950,$message2,$numf,$balancecr);}

text($texte1,$jsonPoets,$token,$chat_id);
       }
       }
       if($Status!='STATUS_CANCEL:'){ if($message2 == 'STATUS_CANCEL:'){
    $texte1=urlencode("✳️ موجودی به حساب شما بازگشت ✳️");
   if($othermethod=='trf'){sqlrun2($conn,$chat_id,950,$message2,$numf,$balancecr2);}else{sqlrun($conn,$chat_id,950,$message2,$numf,$balancecr);}

text($texte1,$jsonPoets,$token,$chat_id);
       } }

     if($Status=='STATUS_CANCEL' or $Status=='STATUS_CANCEL:'){
    $texte1=urlencode("✳️ موجودی به حساب شما بازگشت ✳️");
    text($text4,$jsonPoets,$token,$chat_id);
}
 if($message2=='ACCESS_NUMBER' or $message2=='STATUS_WAIT_CODE'){
       $text4= urlencode( "کد دریافت نشده است
لطفا چند ثانیه دیگر مجددا برای دریافت کد اقدام کنید🙏🏼");
    text($text4,$jsonPoets,$token,$chat_id);
    timetoendt($numf,$conn);
}
       //if($Status=='STATUS_CANCEL' or $Status=='NO_ACTIVATION' or $numya['0']=='STATUS_OK' or $numya['0']=='STATUS_ACCESS'){break;}
 } }else{
     $text4=urlencode( "کد نامعتبر");
text($text4,$jsonPoets,$token,$chat_id);
  }
}else{
                    $sqla = "SELECT *FROM `num`WHERE `orderid` = '$numf'";
$resulta = $conn->query($sqla);
if ($resulta->num_rows > 0) {
$rowa = $resulta->fetch_assoc();
          $Status=$rowa['Status'];
          $m=$rowa['m'];
          $time=time();
          $t2=$rowa['timetoend'];
          $t3=$rowa['buytime'];
        $rrrs=explode('|',$Status);
$es=$rrrs['0'];
          if($m!=1 and $t2<=$time and ($es!=1 or $es!='1 ' or $es!='1')){
    if($othermethod=='ch'){
    $message2=file_get_contents("http://www.getsmscode.com/do.php?action=getsms&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&mobile=".$numf."&author=[author]");
   }
   if($othermethod=='eg'){
   $message2=file_get_contents("http://www.getsmscode.com/vndo.php?action=getsms&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&mobile=".$numf."&author=[author]&cocode=eg");
}
   if($othermethod=='id'){
   $message2=file_get_contents("http://www.getsmscode.com/vndo.php?action=getsms&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&mobile=".$numf."&author=[author]&cocode=id");
}
   if($othermethod=='my'){
   $message2=file_get_contents("http://www.getsmscode.com/vndo.php?action=getsms&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&mobile=".$numf."&author=[author]&cocode=my");
}
   if($othermethod=='mm'){
   $message2=file_get_contents("http://www.getsmscode.com/vndo.php?action=getsms&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&mobile=".$numf."&author=[author]&cocode=mm");
}
   if($othermethod=='vn'){
   $message2=file_get_contents("http://www.getsmscode.com/vndo.php?action=getsms&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&mobile=".$numf."&author=[author]&cocode=vn");
}
   if($othermethod=='ph'){
   $message2=file_get_contents("http://www.getsmscode.com/vndo.php?action=getsms&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&mobile=".$numf."&author=[author]&cocode=ph");
}
   if($othermethod=='kh'){
   $message2=file_get_contents("http://www.getsmscode.com/vndo.php?action=getsms&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&mobile=".$numf."&author=[author]&cocode=kh");
}
   if($othermethod=='hk'){
   $message2=file_get_contents("http://www.getsmscode.com/vndo.php?action=getsms&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&mobile=".$numf."&author=[author]&cocode=hk");
}
   if($othermethod=='mo'){
   $message2=file_get_contents("http://www.getsmscode.com/vndo.php?action=getsms&username=$getsmscode_user&token=$getsmscode_api_key&pid=10&mobile=".$numf."&author=[author]&cocode=mo");
}
$rrr=explode('|',$message2);
$e=$rrr['0'];
if(strpos($message2,'not receive')>0 or strpos($message2,'Not Receive')>0)
{
       $text4= urlencode( "کد دریافت نشده است
لطفا چند ثانیه دیگر مجددا برای دریافت کد اقدام کنید🙏🏼");

}
if(strpos($message2,'mobile number not found!')>0 )
{
       $text4= urlencode( "پول به حساب شما بازگشت");
sqlrun($conn,$chat_id,2000,$message2,$numf,$balancecr);
}
 if($time>=$t3 AND  $othermethod=='eg'){
        $text4= urlencode( "پول به حساب شما بازگشت");
sqlrun($conn,$chat_id,5000,$message2,$numf,$balancecr);
 }
  if($time>=$t3 AND  $othermethod=='my'){
        $text4= urlencode( "پول به حساب شما بازگشت");
sqlrun($conn,$chat_id,6000,$message2,$numf,$balancecr);
 }
  if($time>=$t3 AND  $othermethod=='id'){
        $text4= urlencode( "پول به حساب شما بازگشت");
sqlrun($conn,$chat_id,3000,$message2,$numf,$balancecr);
 }
   if($time>=$t3 AND  $othermethod=='mm'){
        $text4= urlencode( "پول به حساب شما بازگشت");
sqlrun($conn,$chat_id,6000,$message2,$numf,$balancecr);
 }
   if($time>=$t3 AND  $othermethod=='vn'){
        $text4= urlencode( "پول به حساب شما بازگشت");
sqlrun($conn,$chat_id,4000,$message2,$numf,$balancecr);
 }
   if($time>=$t3 AND  $othermethod=='ph'){
        $text4= urlencode( "پول به حساب شما بازگشت");
sqlrun($conn,$chat_id,3500,$message2,$numf,$balancecr);
 }
   if($time>=$t3 AND  $othermethod=='kh'){
        $text4= urlencode( "پول به حساب شما بازگشت");
sqlrun($conn,$chat_id,3500,$message2,$numf,$balancecr);
 }
   if($time>=$t3 AND  $othermethod=='hk'){
        $text4= urlencode( "پول به حساب شما بازگشت");
sqlrun($conn,$chat_id,3500,$message2,$numf,$balancecr);
 }
   if($time>=$t3 AND  $othermethod=='mo'){
        $text4= urlencode( "پول به حساب شما بازگشت");
sqlrun($conn,$chat_id,3500,$message2,$numf,$balancecr);
 }

if($e==1 or $e=='1 '  or $e=='1')
{
       $text4= urlencode( $message2);
sqlrun($conn,$chat_id,0,$message2,$numf,$balancecr);
}
text($text4,$jsonPoets,$token,$chat_id);
timetoendt($numf,$conn);

}
}
}
}
else if($command == '💸 افزایش اعتبار 💸'){
    $text=urlencode("
       برای افزایش اعتبار 💰 حساب خود طبق راهنمای زیر عمل کنید.
مبلغی که قصد دارید اکانت خود را شارژ کنید به صورت زیر وارد کنید :
/p مبلغ به تومان
مثال :
/p4000
در این مثال شما اکانت خود را به مبلغ 4000 تومان برای خرید شماره شارژ میکنید.

‼️ توجه مبلغ پرداختی شما به هیچ عنوان قابل بازگشت نیست پس در خرید خود دقت فرمایید ‼️
 ✳️ افزایش اعتبار از طریق کارت به کارت نیز امکان پزیر است برای اطلاعت بیشتر با ایدی @telefake_admin و یا @fnum_bot تماس حاصل فرمایید ✳️

✳️ پرداخت شما با استفاده از درگاه انلاین پردانو (pardano.com) تحت پروتکل SSL (HTTPS) انجام میشود پس با خیال اسوده خرید کنید✳️

✴️ لینک تایید حساب توسط پردانو : https://goo.gl/LtUwz2 ✴️
✴️ لینک تایید ربات و چنل ما در واحد ساماندهی رسانه ها و محتوای فضای مجازی : https://goo.gl/LdiOQy ✴️
🔷 اعتماد شما اعتبار ماست 🔷
    ");
text($text,$jsonPoets,$token,$chat_id);
}
else if(intval($test['1']) >99){
    $fee=$test['1'];
 $text='1 2 3 4 5 6 7 8 9 0 q w e r t y u i o p a s d f g h j k l z x c v b n m';
 $text= explode(' ',$text);
   $text1e=$text[rand(0,35)];
   $text2e=$text[rand(0,35)];
   $text3e=$text[rand(0,35)];
   $text4e=$text[rand(0,35)];
   $text5e=$text[rand(0,35)];
   $text6e=$text[rand(0,35)];
   $text7e=$text[rand(0,35)];
   $text8e=$text[rand(0,35)];
   $text9e=$text[rand(0,35)];
   $text10e=$text[rand(0,35)];
   $text100=$text1e.$text2e.$text3e.$text4e.$text5e.$text6e.$text7e.$text8e.$text9e.$text10e;
   $sql = "INSERT INTO `p` (`chatid`, `fee`, `vercher`, `status`) VALUES ('$chat_id', '$fee', '$text100', '0'); ";
$conn->query($sql);
$text=urlencode("لینک پرداخت : "
."https://telefake.ir/p.php?id=$text100");
text($text,$jsonPoets,$token,$chat_id);
}
else if($command == "💰 موجودی حساب شما 💰"){

$balance=balance($conn,$chat_id);
 ;
$text=urlencode("کاربر 👤 ".$user." با ایدی 🆔 ".$chat_id."
موجودی حساب شما مبلغ💰 ".$balance." تومان 💰 میباشد");
text($text,$jsonPoets,$token,$chat_id);
}
else if($command == "🔹 امتیاز 🔸"){

$balance=balance2($conn,$chat_id);
 ;
$text=urlencode("کاربر 👤 ".$user." با ایدی 🆔 ".$chat_id."
موجودی امتیاز شما مبلغ💰 ".$balance." تومان 💰 میباشد");
text($text,$jsonPoets,$token,$chat_id);
}
else if($test3['1'] >0 and $qsd!=1){
    $id=$test3['1'];
     $sql = "SELECT *FROM `user`WHERE `chatid` = '$chat_id'";
$result = $conn->query($sql);
if ($result->num_rows <= 0) {
$sql = "INSERT INTO `user` (`username`, `chatid`, `balance`, `rf`) VALUES ('$user',  '$chat_id', '0', '0');";
$conn->query($sql);

     }
     $text=urlencode("
     اگر شماره ثبت شده بر روی تلگرام شما ایران باشد 200 تومان هدیه به اکانت شما اضافه می شود
     گزینه درست را انتخاب کنید.
     ");
        $sql = "UPDATE `user` SET `ider` = '$id' WHERE `chatid` ='$chat_id' ;";
$conn->query($sql);
  $jsonPoets="";
text($text,$jsonPoets,$token,$chat_id);
$poets= array('keyboard' => array(array(array("text" => "چک کردن کشور تلگرام من","request_contact" => true )),array('رد کردن این مرحله')));
    $jsonPoets= json_encode($poets);
    $text= "یکی از کلید های زیر را انتخاب کنید";
  text($text,$jsonPoets,$token,$chat_id);

}
else if($command == '/aboutus'){
    $text= "telefake.ir";
text($text,$jsonPoets,$token,$chat_id);
}else if($command == '/buy'){
         $text=urlencode("کاربر 👤".$user." ایدی شما 🆔 ".$chat_id."
با تشکر از حسن نیت شما برای انتخاب ما 💙
در صورت بروز هرگونه مشکل و سوال با ایدی : @teleFake_Admin و یا @fnum_bot تماس فرمایید 🔔
❕ پشتیبانی 24 ساعته و 7 روز هفته ❕

‼️توجه‼️
هرگونه سوء استفاده از این اکانت ها به عهده شخص استفاده کننده میباشد و گروه TeleFake هیچ مسئولیتی در قبال سوء استفاده مشتریان ندارد
‼️توجه‼️
فیلیپین 🇵🇭 💰4000 تومان 💰
کامبوج 🇰🇭 💰5000 تومان 💰
هنگ کنگ 🇭🇰 💰3500 تومان 💰
ماکائو 🇲🇴 💰3500 تومان 💰
اندونزی 🇮🇩 💰3000 تومان 💰
مصر 🇪🇬 💰5000 تومان 💰
مالزی 🇲🇾 💰6000 تومان 💰
فیلیپین 🇵🇭 💰3500 تومان 💰
میانمار 🇲🇲 💰6000 تومان 💰
ویتنام 🇻🇳 💰5000 تومان 💰
چین 🇨🇳 💰2000 تومان 💰
تایلند 🇹🇭💰4000 تومان 💰
استرلیا 🇦🇹 💰3500 تومان 💰
آفریقای جنوبی 🇿🇦💰4000 تومان 💰
انگلیس 🇬🇧 💰5000 تومان 💰

روش های پرداخت : 🔛 کارت به کارت 💳 و  درگاه پرداخت آنلاین 💵

شماره مجازی تلگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی اینستاگرام 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی واتس اپ 950 تومان 💰 - روسیه 🇷🇺 کد کشور +7
شماره مجازی وایبر 950  تومان 💰 - روسیه 🇷🇺 کد کشور +7
"."ای دی ثبت نام شما  :".$chat_id."
      ");
  $jsonPoets="";
text($text,$jsonPoets,$token,$chat_id);
 $jsonPoets= json_encode($poets);
  $text= "یکی از کلید های زیر را انتخاب کنید";
  text($text,$jsonPoets,$token,$chat_id);
}
else if( $command == 'رد کردن این مرحله'){ }
else if($phone_number>0){ }
else if($command == "🔶 شماره رایگان 🔷"){
      $text="کد برای دعوت دوستان شما :‬‎"."t.me/TeleFake_bot?start=".$chat_id ;
text($text,$jsonPoets,$token,$chat_id);

}
else{
$text="دستور نامعتبر";
text($text,$jsonPoets,$token,$chat_id);
}
function text($textin,$mark,$token,$chat_id){
    $url= "https://api.telegram.org/bot".$token."/sendMessage?chat_id=".$chat_id."&text=".$textin."&reply_markup=".$mark;
    file_get_contents($url);
}
function balance($conn,$chat_id){
        $sql = "SELECT *FROM `user`WHERE `chatid` = '$chat_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
          $balancec=$row['balance'];
    }
     return  $balancec;
}
function balance2($conn,$chat_id){
        $sql = "SELECT *FROM `user`WHERE `chatid` = '$chat_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
          $balancec=$row['b2'];
    }
     return  $balancec;
}
function rf($conn,$chat_id){
        $sql = "SELECT *FROM `user`WHERE `chatid` = '$chat_id'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
          $balancec=$row['ider'];
    }
     return  $balancec;
}
function sqlrun($conn,$chat_id,$fee,$s,$numf,$b){
    $time2=time()+10;
        $sql = "UPDATE `user` SET `balance` = $b + $fee  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
          $sqlw = "UPDATE `num` SET `Status` = '$s' WHERE `orderid` =$numf;";
          $conn->query($sqlw);
          $sqlw = "UPDATE `num` SET `m` = 1 WHERE `orderid` =$numf;";
          $conn->query($sqlw);
                  $sqlw = "UPDATE `num` SET `timetoend` = $time2 WHERE `orderid` =$numf;";
          $conn->query($sqlw);
}
function sqlrun2($conn,$chat_id,$fee,$s,$numf,$b){
    $time2=time()+10;
        $sql = "UPDATE `user` SET `b2` = $b + $fee  WHERE `chatid` = $chat_id;";
          $conn->query($sql);
          $sqlw = "UPDATE `num` SET `Status` = '$s' WHERE `orderid` =$numf;";
          $conn->query($sqlw);
          $sqlw = "UPDATE `num` SET `m` = 1 WHERE `orderid` =$numf;";
          $conn->query($sqlw);
                  $sqlw = "UPDATE `num` SET `timetoend` = $time2 WHERE `orderid` =$numf;";
          $conn->query($sqlw);
}
function timetoendt($numf,$conn){
    $time2=time()+10;
          $sqlw = "UPDATE `num` SET `timetoend` = $time2 WHERE `orderid` =$numf;";
          $conn->query($sqlw);
}
$conn->close();
?>