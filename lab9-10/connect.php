
<?php
	$usernamee = 'root';
	$password = '';
	$connect = new PDO( 'mysql:host=localhost;port=3306;dbname=electro', $usernamee, $password );
	if(!$connect){
		die("Fatal Error: Connection Failed!");
	} 
?>