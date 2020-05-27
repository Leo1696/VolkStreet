<?php
$to = 'sivirggg@mail.ru';
$subject = 'Заказ кальяна с сайта "VOLK STREET"';
$subject = "=?utf-8?b?". base64_encode($subject) ."?=";
$message = "Ваше имя: ".$_POST['name']." \nНомер телефона: ".$_POST['tel']."\nУслуга: ".$_POST['select']."\nСообщение: ".$_POST['message'];
$headers = 'Content-type: text/plain; charset="utf-8"';
$headers = "MIME-Version: 1.0\r\n";
// $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
mail($to, $subject, $message, $headers);
?>