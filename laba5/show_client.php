<?php
require  'myconnection.php';
require  'client.php';
session_start();
$connect = new myconnection('web_techn', 'Stepa', '123', 'client', 'localhost');
$datas = Client::show_client();
foreach($datas as $data)
{
	echo "User name:" . $data["Name"] . "<br/>". " - Email:" . $data["Email"] . "<br/>". " - Phone:" . $data["Phone"] . "<br/><br/>";
}
?>
