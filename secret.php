<?php

session_start();

require 'dbcon.php';

if( isset($_SESSION['username']) ){

	$records = $conn->prepare('SELECT id,username,pwhash FROM users WHERE username = :username');
	$records->bindParam(':username', $_SESSION['username']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}
    
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Shhh!!! It`s a Secret Page..</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style-menu.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
        <?php $curpage = 'secret.php';?>
		<?php include 'menu.php';?>
	</div>

	<?php if( !empty($user) ): ?>



<br><br><br>
		<br />Welcome <?= $user['username']; ?>
		<br /><br />You are successfully logged in!
		<br /><br />
        <img src="img.jpeg" alt="ha" style="width:25%;">
       <br /><br />
		<a href="logout.php">Logout?</a>

	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>
    
<?php require 'footer.php';?>
</body>
</html>