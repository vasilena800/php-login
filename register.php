<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style-menu.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<div class="header">
        <?php $curpage = 'login.php';?>
        <?php include 'menu.php';?>

	</div>

<?php 

if(!empty(filter_input(INPUT_POST, 'submit'))) {
	
	require_once('dbcon.php');
	
	$un = filter_input(INPUT_POST, 'un') 
		or die('Missing/illegal name parameter');
	$pw = filter_input(INPUT_POST, 'pw') 
		or die('Missing/illegal password parameter');

	// hash and salt the password
	$pw = password_hash($pw, PASSWORD_DEFAULT); 
	
//	echo 'Creating user: '.$un.' => '.$pw;
	
	$sql = 'INSERT INTO users (username, pwhash) VALUES (?,?)';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('ss', $un, $pw);
	$stmt->execute();
	
	if ($stmt->affected_rows >0){
		echo '<br><h2 style="color: green;">User '.$un.' is added, go to <a href="login.php" style="text-decoration: none;">login page</a></h2><h3></h2>';
	}
	else {
		echo 'Error adding user ['.$un.'] does this user already exist?';
	}
}
?>


<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
    	<h1>Add new user</h1>
    	<input name="un" type="text" placeholder="Username" required />
    	<input name="pw" type="password" placeholder="Password"  required/>
    	<input type="submit" name="submit" value="Create user" />
</form>

<?php require 'footer.php';?>


</body>
</html>