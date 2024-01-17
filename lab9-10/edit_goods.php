<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- код из лекции (редактирование) -->
<?php
$good_id = $_GET["id"];
$error = array();
$edit_good = array();
$has_error = false;
if(isset($_POST["sign"])){
$edit_good = array(
"id" => $_POST["id"],
"technique" => $_POST["technique"],
"overview" => $_POST["overview"],
"price" => $_POST["price"]
);
if($edit_good["technique"] == ""){
    $error["technique"] = "Поле не заполнено";
    $has_error = true;
}
if($edit_good["overview"] == ""){
    $error["overview"] = "Поле не заполнено";
    $has_error = true;
}
if($edit_good["price"] == ""){
    $error["price"] = "Поле не заполнено";
    $has_error = true;
}
if($has_error){
    ?>
    <form action="edit_goods.php?id=<?=$good_id?>" method="POST">
<input type="hidden" name="id" value="<?=$good_id?>">
<label for="technique">Товар</label>
    <input type="text" id="technique" name="technique" class="input" value="<?=$edit_good["technique"]?>">    
    <?php if(isset($error["technique"]) && $error["technique"] != "") {echo $error["technique"];}?>
<label for="overview">Описание</label>
    <input type="text" class="input" id="overview" name="overview" value="<?=$edit_good["overview"]?>">
    <?php if(isset($error["overview"]) && $error["overview"] != "") {echo $error["overview"];}  ?>
<label for="price">Цена</label>
    <input type="text" class="input" id="price" name="price" value="<?=$edit_good["price"]?>">
    <?php if(isset($error["price"]) && $error["price"] != "") {echo $error["price"];}  ?>
    <input type="submit" class="btn"name="sign" value="Сохранить">
</form>
<?php
} else {
    $pdo =new PDO('mysql:host=localhost;port=3306;dbname=electro', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->query("UPDATE goods 
SET technique='".$edit_good["technique"]."',
 overview='".$edit_good["overview"]."',
  price='".$edit_good["price"]."'
   WHERE id =".$good_id);
   echo"<script>alert('Изменение сохранено')</script>
   <script>window.location = 'admin1.php'</script>";
} 
} else {
$pdo =new PDO('mysql:host=localhost;port=3306;dbname=electro', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->query("SELECT * FROM goods WHERE id =".$good_id);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
if($good = $stmt->Fetch()){
?>

<form action="edit_goods.php?id=<?=$good_id?>" method="POST">
<input type="hidden" name="id" value="<?=$good_id?>">
<label for="technique">Товар</label>
    <input type="text" id="technique" name="technique" class="input" value="<?=$good["technique"]?>">    
<label for="overview">Описание</label>
    <input type="text" class="input" id="overview" name="overview" value="<?=$good["overview"]?>">
<label for="price">Цена</label>
    <input type="text" class="input" id="price" name="price" value="<?=$good["price"]?>">
    <input type="submit" class="btn"name="sign" value="Сохранить">
</form>

<?php
} else{
    echo "Запись не найдена";
}
?>

<?php } ?>
</body>
</html>