<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=p, initial-scale=1.0">
    <title>Администратор</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php if(isset($_SESSION['messages'])): ?>
				<div class="alert alert-<?php echo $_SESSION['messages']['alertt'] ?> msg"><?php echo $_SESSION['messages']['textt'] ?></div>
			<script>
				(function() {
					// removing the message 3 seconds after the page load
					setTimeout(function(){
						document.querySelector('.msg').remove();
					},3000)
				})();
			</script>
			<?php 
				endif;
				// clearing the message
				unset($_SESSION['messages']);
			?>
      <p>  <a class="ah" href="logout_one.php">Выйти</a></p>
    <form class="form" action="admin_user.php" method="post">
      <h2>Вход в админку</h2>
      <label for="examplelogin">Логин</label>
        <input type="text" placeholder="email" name="login" class="input" id="examplelogin">
        <label for="examplepass">Пароль</label>
        <input type="password" placeholder="password" name="password" class="input" id="examplepass">
        <div>
          <button type="submit" class="btn" name="entrance">Войти</button>
          </form>
        </div>
      </form>
</body>
</html>