<!DOCTYPE html>
<?php
	require 'connect.php';
	session_start();
	
	if(!ISSET($_SESSION['admin'])){
		header('location:admin.php');
	}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>админка</title>
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
                <a class="nav-item" href="/labs/lab9-10/reg.php" target="_blank">Вход/Регистрация</a>
                <a class="nav-item" href="/labs/lab9-10/admin.php" target="_blank">Админ</a>
                <a class="nav-item" href="logout.php">Выйти</a>
            </div>
        </div>
        </div>
<?php
$stmt = $connect->query('SELECT * FROM users ORDER BY `id` ASC');
$stmt->setFetchMode(PDO::FETCH_ASSOC); 
$uslug = $connect->query('SELECT * FROM goods');
$uslug->setFetchMode(PDO::FETCH_ASSOC); 
?>

            <h3 style="margin-left: 15px">Пользователи</h3>
<table border="1" style="margin-left: 20px">
<?php while($row = $stmt->fetch()):?>
<tr>
    <td><?php echo $row["id"]?></td>
    <td><?php echo $row["username"]?></td>
    <td><?php echo $row["email"]?></td>
    <td><?php echo $row["login"]?></td>
    <td><a href="edit_user.php?id=<?=$row['id']?>">Редактировать</a></td>
    <td><a href="delete_user.php?id=<?=$row['id']?>">Удалить</a></td>
</tr>
 <?php endwhile;?>
</table>
<a style="margin-left: 20px" href="add_user.php">Добавить пользователя</a>
<br>
<br>
<h3 style="margin-left: 20px">Товары и аксессуары</h3>
<table border="1" style="margin-left: 20px">
<?php while($row2 = $uslug->fetch()):?>
<tr>
    <td><?php echo $row2["id"]?></td>
    <td><?php echo $row2["technique"]?></td>
    <td><?php echo $row2["overview"]?></td>
    <td><?php echo $row2["price"]?></td>
    <td><a href="edit_goods.php?id=<?=$row2['id']?>">Редактировать</a></td>
    <td><a href="delete_goods.php?id=<?=$row2['id']?>">Удалить</a></td>
</tr>
 <?php endwhile;?>
</table>
<a style="margin-left: 20px" href="add_goods.php">Добавить товары</a>
</body>
</html>