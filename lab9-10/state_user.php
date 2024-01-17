<?php
session_start();
require_once 'connect.php';

if(ISSET($_POST['entrance'])){
  if($_POST['login'] != "" || $_POST['password'] != ""){
    $login = $_POST['login'];
    $password = md5($_POST['password']);
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE login=? AND password=? ";
    $query = $connect->prepare($sql);
    $query->execute(array($login,$password));
    $row = $query->rowCount();
    $fetch = $query->fetch();
    if($row > 0) {
      $_SESSION['user'] = $fetch['id'];
      header("location: personal_area.php");
    } else{
      echo "
      <script>alert('Неправильный логин или пароль')</script>
      <script>window.location = 'aut.php'</script>
      ";
    }
  }
}
?>