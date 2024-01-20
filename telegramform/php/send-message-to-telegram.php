<?php

/* https://api.telegram.org/bot6816639184:AAFpviaRcyzwS5j7Fhb-2MQm-yesbmU2L_Q/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$age = $_POST['user_age'];
$token = "6816639184:AAFpviaRcyzwS5j7Fhb-2MQm-yesbmU2L_Q";
$chat_id = "-4147414117";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Возраст' => $age
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Заявка отправлена"
} else {
  echo "Error";
}
?>