<?php
	session_start();
	require_once 'connect.php';
 
	if(ISSET($_POST['sign'])){
		if( $_POST['email'] !=='' && $_POST['email'] !==' ' &&$_POST['login'] !=='' && $_POST['login'] !==' ' && $_POST['password'] !=='' && $_POST['password'] !==' ' && $_POST['username'] !=='' && $_POST['username'] !==' '){
			try{
                $login=$_POST['login'];
                $password=$_POST['password'];
                $email=$_POST['email'];
                $username=$_POST['username'];
            
                $data = array( 'login' => $login, 
                      'password' => $password,
                      'email' => $email,
                      'username' => $username,
                     ); 
    
                $sql = "INSERT INTO  users (login , password, email, username)
                        values (
                        :login, :password, :email, :username 
                        );"; //Формируем запрос без данных
                $result = $connect->prepare($sql);
                $result->execute($data); //Выполняем запросы
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$conn = null;
			header('location: admin1.php');
		}else{
			echo "
				<script>alert('Пожалуйста повторите попытку')</script>
				<script>window.location = 'add_user.php'</script>
			";
		}
	}
?>