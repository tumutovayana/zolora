<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
        <div class="container">
        <div class="header-line">
            <div class="header-logo">
                <img src="images/logo_galaxy.jpg" width="90" height="90" alt="logo">
            </div>
            <div class="nav">
                <a class="nav-item" href="/labs/lab9-10/index.php">Главная</a>
                <a class="nav-item" href="/labs/lab9-10/goods.php" target="_blank">Товары</a>
                <a class="nav-item">Вход/Регистрация</a>
                <a class="nav-item" href="/labs/lab9-10/admin.php" target="_blank">Админ</a>
            </div>
        </div>
        </div>
    <!-- регистрация -->
      <form class="form" action="save_user.php" method="post">
      <h2>Регистрация</h2>
      <label for="username">Имя</label>
    <input type="text" id="username" name="username" class="input" placeholder="name">
      <label for="examplelogin">Логин</label>
        <input type="text" placeholder="email or number phone" name="login" class="input" id="examplelogin">
        <label for="examplemail">Электронная почта</label>
        <input type="email" placeholder="email" name="email" class="input" id="examplemail">
        <label for="examplepass">Пароль</label>
        <input type="password" placeholder="password" name="password" class="input" id="examplepass">
        <div>
          <button type="submit" class="btn" name="sign">Зарегистрироваться</button>
           <a href="aut.php">Авторизация</a>
           
          </div>
        
      </form>
    </body>
</html>