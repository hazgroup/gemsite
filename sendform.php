<?php
//Сбор данных из полей формы. 
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
$email = $_POST['email']; // Берём данные из input c атрибутом name="mail"
$address = $_POST['address']; // Берём данные из input c атрибутом name="address"
$message = $_POST['message']; // Берём данные из input c атрибутом name="message"


$token = "6181269973:AAEOTubsfDwaAZn7lnHog_JpriAT-WS07Nk"; // Тут пишем токен
$chat_id = "55972879"; // Тут пишем ID чата, куда будут отправляться сообщения
$sitename = "геммологическоеоборудование.рф"; //Указываем название сайта
 
$arr = array(
 
  'Заказ с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Почта: ' => $email,
  'Адрес: ' => $address,
  'Комментарий: ' => $message
);
 
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
?>