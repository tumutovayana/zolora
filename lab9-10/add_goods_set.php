<?php
	session_start();
	require_once 'connect.php';
 
	if(ISSET($_POST['sign'])){
		if( $_POST['technique'] !=='' && $_POST['technique'] !==' ' &&$_POST['overview'] !=='' && $_POST['overview'] !==' ' && $_POST['price'] !=='' && $_POST['price'] !==' '){
			try{
                $technique=$_POST['technique'];
                $overview=$_POST['overview'];
                $price=$_POST['price'];
            
                $data = array(
                      'technique' => $technique,
                      'overview' => $overview,
                      'price' => $price,); 
                $sql = "INSERT INTO  users (technique, overview, price)
                        values (:login, :technique, :overview, :price);"; 
                $result = $connect->prepare($sql);
                $result->execute($data);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$connect = null;
			header('location: admin1.php');
		}else{
			echo "
				<script>alert('Пожалуйста повторите попытку')</script>
				<script>window.location = 'add_goods.php'</script>
			";
		}
	}
?>