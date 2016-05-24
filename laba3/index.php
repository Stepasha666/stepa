<?php
header("Content-Type: text/html; charset=utf-8"); 
session_start();
$_SESSION['test'] = $_SERVER['REMOTE_ADDR']; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lab3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <form action="script.php" method="get" action="index.html">
  <section class="container">
    <div class="login">
      <h1>Регистрация</h1>
     
      
      <p>ФИО:
        <input type="text" name="name" id="name" placeholder="Name" pattern="([A-zА-Яа-яЁё\s-]{1,50})" required/>
      </p>
      <p>Email:
        <input type="email" name="email" id="email" placeholder="Email" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" required/>
      </p>
      <p>Телефон:
        <input type="tel" name="phone" id="phone" value="7-" placeholder="Phone" />
      </p>
      <p class="submit"><input type="submit" name="commit" value="Зарегистрироваться"></p>
      <br>

      <?php 
      echo $_SESSION['message'];
      $_SESSION['message'] = ''; 
      ?>

      </form>
    </div>
  </section>
  <p>

</p> 
</form>

</body>
</html>
