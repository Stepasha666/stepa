<?php
header("Content-Type: text/html; charset=utf-8"); 
session_start();
$_SESSION['test'] = $_SERVER['REMOTE_ADDR']; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>lab4</title>
	
</head>
<body>

  <section class="container">
    <div class="login">
      <h1>Регистрация</h1>
      <form action="script.php" method="get" action="index.html">
      <p>Логин:
        <input type="text" name="name" id="name" value="<?php 
      echo $_SESSION['nameR'];
      $_SESSION['nameR'] = ''; 
      ?>" placeholder="User name" pattern="([A-z0-9_.-]{1,50})" required/>
      </p>
      <p>Email:
        <input type="email" name="email" id="email" value="<?php 
      echo $_SESSION['emailR'];
      $_SESSION['emailR'] = ''; 
      ?>" placeholder="Email" pattern="([A-z0-9_.-]{1,})@([A-z0-9_.-]{1,}).([A-z]{2,8})" required/>
      </p>
      <p>Телефон:
        <input type="tel" name="phone" id="phone" value="<?php 
      echo $_SESSION['phoneR'];
      $_SESSION['phoneR'] = ''; 
      ?>" placeholder="Phone" pattern="^\d{1}-\d{3}-\d{3}-\d{2}-\d{2}$" required/>
      </p>
      <p>Пароль:
        <input type="password" name="password" id="password" value="" placeholder="Password" pattern="^[A-zА-Яа-яЁё-0-9\s-]{5,20}" required/>
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
