<?php
header("Content-Type: text/html; charset=utf-8"); 
session_start();
$_SESSION['test'] = $_SERVER['REMOTE_ADDR']; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lab6</title>
</head>
<body>

  <section class="container">
    <div class="login">
      <h1>Регистрация</h1>     
      <?php
              require 'client.php';
              echo Client::get_form('toclient.php');
              echo $_SESSION['message'];
              $_SESSION['message'] = ''; 
              echo Client::method('show_client.php', 'show_last_client.php', 'delete_last_client.php');
              echo $_SESSION['message'];
              $_SESSION['message'] = '';
      ?>
      </div>
  </section>
</form>
</body>
</html>
