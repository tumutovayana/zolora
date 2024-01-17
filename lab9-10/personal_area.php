
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Личный кабинет</title>
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
                <a class="nav-item" href="/labs/lab9-10/index.php" target="_blank">Главная</a>
                <a class="nav-item" href="/labs/lab9-10/goods.php" target="_blank">Товары</a>
                <a class="nav-item" href="/labs/lab9-10/reg.php" target="_blank">Вход/Регистрация</a>
                <a class="nav-item" href="/labs/lab9-10/admin.php" target="_blank">Админ</a>
            </div>
        </div>
        </div>
          <h3 style="text-align:center">Профиль</h3>
        <?php
        session_start();
	      require 'connect.php';
        if(!ISSET($_SESSION['user'])){
          header('location:aut.php');
        }
        ?>
<?php 
$id = $_SESSION['user'];
				$sql = $connect->prepare("SELECT * FROM `users` WHERE `id`='$id'");
				$sql->execute();
				$fetch = $sql->fetch();?>
    <form class="form" action="" method="POST">
    <h2>Сменить данные</h2>
    <label for="username">Имя:</label>
    <input type="text" class="input" id="username" name="username" value="<?=$fetch['username']?>" require>
    <label for="email">Почта</label>
    <input type="email" class="input" id="email" name="email" value="<?=$fetch['email']?>" require>
    <label for="login">Логин</label>
    <input type="text" class="input" id="login" name="login" value="<?=$fetch['login']?>" require>
    <label for="Пароль">Пароль</label>
    <input type="password" class="input" id="password" name="password" value="" require>


    <input type="submit" class="btn btn-primary form-control" id="sub" name="sub" value="Сохранить изменения">

</form>
<?php
if(isset($_POST["sub"])){
$edit_user = array(
"email" => $_POST["email"],
"login" => $_POST["login"],
"password" => $_POST["password"],
"username" => $_POST["username"],
);
$stmt = $connect->query("UPDATE users SET username='".$edit_user["username"]."', email='".$edit_user["email"]."',login='".$edit_user["login"]."',password='".$edit_user["password"]."'WHERE id =".$fetch['id']);
   echo "
				<script>alert('Данные успешно сохранены!')</script>";
}
?>
</body>
</html>