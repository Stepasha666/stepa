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
	if (!empty($_GET["name"]) && check_length($_GET["name"], 1, 50)) 
		$name = clean($_GET["name"]);
	else {$success = false ; $_SESSION['message'] = 'Ошибка! Недопустимое значение в поле ФИО'; }
	if (!empty($_GET["email"]) && filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) 
    	$email = clean($_GET["email"]); 
	else {$success = false ; $_SESSION['message'] = 'Ошибка! Недопустимое значение в поле Email'; }
	if (!empty($_GET["phone"]) && check_length($_GET["phone"], 1, 15)) 
		$phone = clean($_GET["phone"]); 
	else {$success = false ; $_SESSION['message'] = 'Ошибка! Недопустимое значение в поле Телефон'; }
	if($success == true)
	{
		$_SESSION['message'] = 'Благодарим за регистрацию!'; 
		$fp  = fopen('tmp.txt', 'a+'); 
		fwrite($fp, $name."\n");
		fwrite($fp, $NewLine."\n"); 
		fwrite($fp, $email."\n"); 
		fwrite($fp, $NewLine."\n");
		fwrite($fp, $phone."\n"); 
		fwrite($fp, $NewLine."\n");
		fwrite($fp, $NewLine."\n");
		fclose($fp); 		
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
