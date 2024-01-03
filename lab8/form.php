<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма регистрации пользователя</title>
</head>
<body>
    <p>Регистрация пользователя:</p>
    <form action="/labs/lab8/form.php" method="post">
    <label>ФИО:</label>
        <input type="text" id="inputname" name="input-name"  placeholder="Введите свое ФИО">    
    <label>Логин:</label>
        <input type="text" id="login" name="login" placeholder="Введите свой логин">
    <label>Пароль:</label>
        <input type="password" id="password" name="password" placeholder="Введите свой пароль">
    <label>Дата рождения:</label>
        <input type="date" id="date" name="date" placeholder="Введите свою дату рождения">
        <input type="submit" name="submit-form" value="Зарегистрироваться"> 
    </form>
    <?php
    if(isset($_POST["submit-form"]))
{
    if (!empty($_POST['input-name']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['date'])){
        $inputname = $_POST['input-name'];
        $login = $_POST['login'];
        $password = $_POST['password'];
        $date = $_POST['date'];
    }
}
?>
</body>
</html>
