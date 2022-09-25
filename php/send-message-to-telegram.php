<?php

$msg = $_POST['DataToServ'];

$msg_arr = json_decode($msg, true);

$name = json_encode(array_shift($msg_arr), JSON_UNESCAPED_UNICODE);
$nameFieldset = "Имя пославшего: ";

$phone = json_encode(array_shift($msg_arr), JSON_UNESCAPED_UNICODE);
$phoneFieldset = "Телефон: ";

$theme = json_encode($msg_arr, JSON_UNESCAPED_UNICODE);
$themeFieldset = "Товары: ";

$token = "1283919418:AAFK_t9eBW19jITUlwV9wKYFZxYpgJbFpD0";
$chat_id = "-1001378115482";

$arr = array(
  $nameFieldset => $name,
  $phoneFieldset => $phone,
  $themeFieldset => $theme
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>
