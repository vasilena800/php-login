<link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style-menu.css">
	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
	<div class="header">
        <?php $curpage = 'login.php';?>
        <?php include 'menu.php';?>

	</div>

<?php
 
session_start();

require 'dbcon.php';

if(!empty($_POST['username']) && !empty($_POST['pwhash'])):
	
	$records = $conn->prepare('SELECT id,username,pwhash FROM users WHERE username = :username');
	$records->bindParam(':username', $_POST['username']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['pwhash'], $results['pwhash']) ){

		$_SESSION['user_id'] = $results['id'];
		echo '<h4 style="color:green;">You are logged in as: </h4>'.$un;

	} else {
		$message = 'Sorry, those credentials do not match';
	}

endif;

?>



<?php

if(!empty(filter_input(INPUT_POST, 'submit'))) {

	require_once('dbcon.php');
	
	$un = filter_input(INPUT_POST, 'un') 
		or die('Missing/illegal name parameter');
	$pw = filter_input(INPUT_POST, 'pw') 
		or die('Missing/illegal password parameter');

	$sql = 'SELECT id, pwhash FROM users WHERE username=?';
	$stmt = $link->prepare($sql);
	$stmt->bind_param('s', $un);
	$stmt->execute();
	$stmt->bind_result($uid, $pwhash);

	while ($stmt->fetch()) {} // fill result variables
	
	if (password_verify($pw, $pwhash)){
		
		echo '<br><h2 style="color:green;">You are logged in as: '.$un.'</h2><br>
        <img src="img.jpeg" alt="secret page image"> <br><br><br>
        <a href="logout.php">Logout?</a>
';
		
		
		$_SESSION['uid'] = $uid;
		$_SESSION['un'] = $un;
	}
	else {
		echo 'illegal username/password combination';
	}
}
?>

<div><?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>
</div>

<form action="<?=$_SERVER['PHP_SELF'] ?>" method="post">
     <h1>Login</h1> 
    
    <input name="un" type="text" placeholder="Username" required /> 
    <input name="pw" type="password" placeholder="Password"  required/>
    <input type="submit" name="submit" value="Login"/>
</form>
</body>
</html>