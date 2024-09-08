<? session_start();
header('Content-Type: text/html; charset=utf-8');
// ВНИМАНИЕ! заполнить нижеследующую строку так: 

    $dbhost = "sql100.infinityfree.com"; // хост базы данных
    $dbuser = "if0_37267879"; // имя пользователя базы данных
    $dbpass = "zf3TTS8eZK807"; // пароль базы данных (пароль от панели управления vPanel)
    $db_name = "if0_37267879_123"; // название базы данных




$db = mysqli_connect($dbhost,$dbuser,$dbpass,$db_name);
// НИЖЕ  ничего не трогать!!!
mysqli_query($db, "SET NAMES utf8");
if (!$db) { 
   printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error()); 
   exit; 
}



$host = 'http://'.$_SERVER['HTTP_HOST'].'/';

$settings = $db->query("SELECT * FROM settings");
while ($result = mysqli_fetch_array($settings)) {
		$admpas = $result['acceskey'];
		$admlogin = $result['login'];
		$tarif = $result['tarif'];
		$minbal = $result['minwith'];
        $ssilka = $result['url'];
		$textob = $result['textob'];
    }
	$statsmoney = $db->query("SELECT * FROM users");
	$colvousers = $statsmoney->num_rows;
	$date = new DateTime();
$timenow = $date->getTimestamp();


   	
$refcode = $_SESSION['refferal'];
$db->set_charset("utf8");
mysqli_set_charset($db, "utf8");
echo '<link rel="stylesheet" href="/css/global.css">
<link rel="stylesheet" href="/css/easy.css">
<style>body {background:#F4F6F9;}</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
?>