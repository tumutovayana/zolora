<?php
	session_start();
	$username = 'root';
	$password = '';
	$connect = new PDO('mysql:host=localhost;port=3306;dbname=electro', $username, $password );
	if(!$connect){
		die("Fatal Error: Connection Failed!");
	}
	if(ISSET($_POST['entrance'])){
		if($_POST['login'] != "" || $_POST['password'] != ""){
			$login = $_POST['login'];
			// md5 encrypted
			// $password = md5($_POST['password']);
			$password = $_POST['password'];
			$sql = "SELECT * FROM admin WHERE login=? AND password=? ";
			$query = $connect->prepare($sql);
			$query->execute(array($login,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['admin'] = $fetch['id'];
				header("location: admin1.php");
			} else{
				echo "
				<script>alert('Неправильный логин или пароль')</script>
				<script>window.location = 'admin.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Пожалуйста, заполните обязательные поля!')</script>
				<script>window.location = 'admin.php'</script>
			";
		}
	}
?>