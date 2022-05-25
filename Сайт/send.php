<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$name = urldecode($name);
$phone = urldecode($phone);
$name = trim($name);
$phone = trim($phone);
//echo $name;
//echo "<br>";
//echo $phone;
if (mail("gazprmn@gmail.com", "Заявка с сайта", "Имя заказчика: ".$name.". Телефон заказчика: ".$phone ,"From:gazprmn@gmail.com \r\n"))
 {     header('location: index.html');
} else {
    echo "при отправке сообщения возникли ошибки";
}?>