<?php
session_start();
$username = 'root';
	$password = '';
	$connect = new PDO( 'mysql:host=localhost;port=3306;dbname=electro', $username, $password );
	if(!$connect){
		die("Fatal Error: Connection Failed!");
	} 

if(ISSET($_POST['sign'])){
  if($_POST['username'] !== "" && $_POST['username'] !== " " && $_POST['login'] !== "" && $_POST['login'] !== " " && $_POST['email'] !== "" && $_POST['email'] !== " " && $_POST['password'] !== "" && $_POST['password']){
    try{
      $username = $_POST['username'];
      $login = $_POST['login'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO `users` VALUES ('', '$username', '$login', '$email', '$password', '$admin' )";
      $connect->exec($sql);
    }catch(PDOException $e){
      echo $e->getMessage();
    }
    $_SESSION['message']=array("text"=>"Пользователь зарегистрирован.","alert"=>"info");
    $conn = null;
    header('location:aut.php');
  }else{
    echo "
      <script>alert('Пожалуйста повторите попытку регистрации')</script>
      <script>window.location = 'reg.php'</script>
    ";
  }
}
?>