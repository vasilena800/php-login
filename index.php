



<!DOCTYPE html>
<html>
<head>
	<title>Welcome to your Web Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style-menu.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="header">
        <?php $curpage = 'index.php';?>
		<?php include 'menu.php';?>
	</div>

    <?php if( !empty($user) ): ?>

    <br><br><br>
		<br />Welcome <?= $user['username']; ?> 
		<br /><br />You are successfully logged in!
        <br /><br>
        <img src="ha.jpeg" alt="ha" style="width:25%;">
		<br /><br>
		<a href="logout.php">Logout?</a>

	<?php else: ?>
    
    <br><br><br>
    <h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>
	
    <?php endif; ?>
    <?php require 'footer.php';?>
</body>
    
    
    
    
    
<!--

< ?php // include 'menu.php';?> 

<section class="main-container">
	<div class="main-wrapper">
		<h1>PHP & MySQL</h1>
        <h3 style="color:gray;">Welcome to my first Login System</h3>
		
		< ?php /*
			if (isset($_SESSION['u_id'])) {
				echo "You are logged in!";
			}
		?>
	</div>
</section>
< ?php /*
	include_once 'login.php';
?>

< ?php /*
	include_once 'footer.php';
?>

   
    
    
   --> 
    
    
    
    
    
    
    
    
    
    
    
    
</html>