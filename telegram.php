<?php

/* https://api.telegram.org/bot992648479:AAGYS7hQcsycF09vrOYYQeEPYw1wgWiFcQA/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$msg = $_POST['user_msg'];
$token = "992648479:AAGYS7hQcsycF09vrOYYQeEPYw1wgWiFcQA";
$chat_id = "-366150107";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение: ' => $msg
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  // 
	echo "<p class='thanks'></p>";
} else {
  echo "Error";
}
?>