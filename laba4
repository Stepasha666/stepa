<?php 
header("Content-Type: text/html; charset=utf-8"); 
session_start();
if ($_SESSION['test'] == $_SERVER['REMOTE_ADDR'])  
{
	$name = $email = $phone = '';
	$_SESSION['message'] = ''; 
	$NewLine = "\n";
	$success = true;
	$_SESSION['nameR'] = $_GET["name"];
	$_SESSION['emailR'] = $_GET["email"];
	$_SESSION['phoneR'] = $_GET["phone"];
     $name  = $_GET['name'];
     $res = mysqli_query(connect(), "SELECT `Name` FROM `client` WHERE `Name` = '$name'");
     if(mysqli_num_rows($res) > 0) 
        {$success = false ; $_SESSION['message'] = 'Пользователь с таким именем уже существует!';}
	if (!empty($_GET["name"]) && check_length($_GET["name"], 1, 50)) 
		$name = clean($_GET["name"]);
	else {$success = false ; $_SESSION['message'] = 'Ошибка! Недопустимое значение в поле Логин'; }
	if (!empty($_GET["email"]) && filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) 
    	$email = clean($_GET["email"]); 
	else {$success = false ; $_SESSION['message'] = 'Ошибка! Недопустимое значение в поле Email'; }
	if (!empty($_GET["phone"]) && check_length($_GET["phone"], 1, 15)) 
		$phone = clean($_GET["phone"]); 
	else {$success = false ; $_SESSION['message'] = 'Ошибка! Недопустимое значение в поле Телефон'; }
	if (!empty($_GET["password"]) && check_length($_GET["password"], 5, 20)) 
		$password = clean($_GET["password"]); 
	else {$success = false ; $_SESSION['message'] = 'Ошибка! Недопустимое значение в поле Пароль'; }
 
	if($success == true)
	{
		$_SESSION['message'] = 'Благодарим за регистрацию!'; 	
		mysqli_query(connect(),"INSERT INTO `client` (`Name`, `Email`, `Phone`, `Password`)
		VALUES ('$name', '$email', '$phone', '$password')"); 		
	}
}
else {$_SESSION['message'] = 'Ошибка доступа';}
$back = $_SERVER['HTTP_REFERER']; 
		echo "
		<html>
  		<head>
  		<meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'>
  		</head>
		</html>";	
?>

<?php
function clean($value = "") {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    $value = htmlspecialchars($value);    
    return $value;
}
?>

<?php
function check_length($value = "", $min, $max) {
    $result = (mb_strlen($value) < $min || mb_strlen($value) > $max);
    return !$result;
}
?>

<?php
function connect() {    
    return mysqli_connect('localhost','Stepa','123',"aaa");
}
?>
