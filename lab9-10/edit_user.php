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
$user_id = $_GET["id"];
$error = array();
$edit_user = array();
$has_error = false;
if(isset($_POST["sign"])){
$edit_user = array(
"id" => $_POST["id"],
"username" => $_POST["username"],
"email" => $_POST["email"],
"login" => $_POST["login"],
"password" => $_POST["password"]
);
if($edit_user["username"] == "" || $edit_user["username"] == " "){
    $error["username"] = "Поле не заполнено";
    $has_error = true;
}
if($edit_user["email"] == "" || $edit_user["email"] == " "){
    $error["email"] = "Поле не заполнено";
    $has_error = true;
}
if($edit_user["login"] == "" || $edit_user["login"] == " "){
    $error["login"] = "Поле не заполнено";
    $has_error = true;
}
if($edit_user["password"] == "" || $edit_user["password"] == " "){
    $error["password"] = "Поле не заполнено";
    $has_error = true;
}
if($has_error){
    ?>
    <form action="edit_user.php?id=<?=$user_id?>" method="POST">
<input type="hidden" name="id" value="<?=$user_id?>">
<label for="username">Имя</label>
    <input type="text" id="username" name="username" class="input" value="<?=$edit_user["username"]?>">    
    <?php if(isset($error["username"]) && $error["username"] != "") {echo $error["username"];}?>
<label for="email">Почта</label>
    <input type="email" class="input" id="email" name="email" value="<?=$edit_user["email"]?>">
    <?php if(isset($error["email"]) && $error["email"] != "") {echo $error["email"];}  ?>
<label for="login">Логин</label>
    <input type="text" class="input" id="login" name="login" value="<?=$edit_user["login"]?>">
    <?php if(isset($error["login"]) && $error["login"] != "") {echo $error["login"];}  ?>
</div>
<label for="password">Пароль</label>
    <input type="password" class="input" id="password" name="password" value="">
    <?php if(isset($error["password"]) && $error["password"] != "") {echo $error["password"];}  ?>
    <input type="submit" class="btn"name="sign" value="Сохранить">
</form>
<?php
} else {
    $pdo =new PDO('mysql:host=localhost;port=3306;dbname=electro', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->query("UPDATE users 
SET username='".$edit_user["username"]."',
 email='".$edit_user["email"]."',
  login='".$edit_user["login"]."',
  password='".$edit_user["password"]."'
   WHERE id =".$user_id);
   echo"<script>alert('Изменение сохранено')</script>
   <script>window.location = 'admin1.php'</script>";
} 
} else {
$pdo =new PDO('mysql:host=localhost;port=3306;dbname=electro', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $pdo->query("SELECT * FROM users WHERE id =".$user_id);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
if($user = $stmt->Fetch()){
?>

<form action="edit_user.php?id=<?=$user_id?>" method="POST">
<input type="hidden" name="id" value="<?=$user_id?>">
<label for="username">Имя</label>
    <input type="text" id="username" name="username" class="input" value="<?=$user["username"]?>">    
<label for="email">Почта</label>
    <input type="email" class="input" id="email" name="email" value="<?=$user["email"]?>">
<label for="login">Логин</label>
    <input type="text" class="input" id="login" name="login" value="<?=$user["login"]?>">
<label for="password">Пароль</label>
    <input type="password" class="input" id="password" name="password" value="">
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