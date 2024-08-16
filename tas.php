<?php
header('Content-Type: application/json');
$radio_url = "https://Qurango.net/radio/yasser_aldosari";
$telegram_username = "@lmuuml";
$ip_address = $_SERVER['REMOTE_ADDR']; // يمكنك استخدام هذا للحصول على عنوان IP الخاص بالمستخدم

$response = array(
    "radio_url" => $radio_url,
    "ip_address" => $ip_address,
    "telegram_username" => $telegram_username
);

echo json_encode($response);
?>				
