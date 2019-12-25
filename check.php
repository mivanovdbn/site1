<?php
#print_r($_POST);
$email = $_POST['email'];
$message = $_POST['message'];
$error='';
if(trim($email) == '')
$error='Введите ваш email';
 else if (trim($message) == '')
 $error='Введите само сообщение';
 else if (strlen($message) <15)
 $error='Сообщение должно быть больше 15 символов';
if ($error !='') {
echo $error;
exit;
}
$subject ='=?utf-8?B?'.base64_encode("Тестовое сообщение")."?=";
$headers ="From: $email\r\nReply-to: $email\r\n\Content-type: text/html; charset=utf-8\r\n";
mail('dasha98b@gmail.com', $subject, $message, $headers);
header('Location: /about.php');
 ?>
