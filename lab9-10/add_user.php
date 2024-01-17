<?php	session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h2>Добавление пользователя</h2>
    <div class="add">
        <form action="add_user_set.php" method="POST">
        <label for="username">Имя</label>
    <input type="text" id="username" name="username" class="input" placeholder="name">
      <label for="examplelogin">Логин</label>
        <input type="text" placeholder="email or number phone" name="login" class="input" id="examplelogin">
        <label for="examplemail">Электронная почта</label>
        <input type="email" placeholder="email" name="email" class="input" id="examplemail">
        <label for="examplepass">Пароль</label>
        <input type="password" placeholder="password" name="password" class="input" id="examplepass">
        <div>
          <button type="submit" class="btn" name="sign">Добавить</button>
        </form>
    </div>
</body>
</html>