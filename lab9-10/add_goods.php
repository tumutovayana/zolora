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
    <h2>Добавление товара</h2>
    <div class="add">
        <form action="add_goods_set.php" method="POST">
        <label for="technique">Товар</label>
    <input type="text" id="technique" name="technique" class="input" placeholder="technique">
      <label for="overview">Описание</label>
        <input type="text" placeholder="overview" name="overview" class="input" id="overview">
        <label for="price">Цена</label>
        <input type="text" placeholder="price" name="price" class="input" id="price">
        <div>
          <button type="submit" class="btn" name="sign">Добавить</button>
        </form>
    </div>
</body>
</html>