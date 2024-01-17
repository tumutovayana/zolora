<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
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
    <!-- aut -->
      <form class="form" action="state_user.php" method="post">
      <h2>Авторизация</h2>
      
      <label for="examplelogin">Логин</label>
        <input type="text" placeholder="email" name="login" class="input" id="examplelogin">
        <label for="examplepass">Пароль</label>
        <input type="password" placeholder="password" name="password" class="input" id="examplepass">
        <div>
          <button type="submit" class="btn" name="entrance">Войти</button>
          </form>
           <a href="reg.php">Зарегистрироваться</a>
        </div>
      </form>
      
    </body>
</html>