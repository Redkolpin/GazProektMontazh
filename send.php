$name = $_POST['name'];
$phone = $_POST['phone'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$name = urldecode($name);
$phone = urldecode($phone);
$name = trim($name);
$phone = trim($phone);
echo $name;
echo "<br>";
echo $phone;
mail("gazprmn@gmail.com", "Заявка с сайта", "Имя заказчика:".$fio.". Его телефон: ".$email ,"From: gazprmn@gmail.com \r\n");
if (mail("gazprmn@gmail.com", "Заявка с сайта", "Имя заказчика:".$fio.". Его телефон: ".$email ,"From: gazprmn@gmail.com \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}