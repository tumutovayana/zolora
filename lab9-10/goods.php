
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Товары</title>
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
                <a class="nav-item">Товары</a>
                <a class="nav-item" href="/labs/lab9-10/reg.php" target="_blank">Вход/Регистрация</a>
                <a class="nav-item" href="/labs/lab9-10/admin.php" target="_blank">Админ</a>
            </div>
        </div>
        </div>
        <div>
        <?php
$connect =new PDO('mysql:host=localhost;port=3306;dbname=electro','root','');
if(!$connect){
    die("Fatal Error: Connection Failed!");
} 
$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$stmt=$connect->query('SELECT * FROM goods');
$stmt->setFetchMode(PDO::FETCH_ASSOC);
?>
<div>
    <div class="images">
        <p><img src="rass.jpg" alt=""></p>
    </div>
<div class="table">
<table border="1" class="table">
<caption class="size">Лимитированная коллекция техники и аксессуаров BTS</caption>
<tr>
    <th class="col1">Товары</th>
    <th class="col2">Описание</th>
    <th class="col3">Цена, руб.</th>
</tr>
<?php
while($row = $stmt->fetch()):?> 
<tr>
    <td><?php echo $row["technique"]?></td>
    <td><?php echo $row["overview"]?></td>
    <td><?php echo $row["price"]?></td>
</tr>
<?php endwhile?>
</table>
</div>
</div>
</body>
</html>