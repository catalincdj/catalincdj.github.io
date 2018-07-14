<?php
	session_start();
	require 'db.php';

if( isset($_SESSION['user_id']) ){

	$records = $conn->prepare('SELECT * FROM users WHERE id = :id');
	$records->bindParam(':id', $_SESSION['user_id']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$user = NULL;

	if( count($results) > 0){
		$user = $results;
	}
}
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<title>ACAbet</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script>(function(){document.documentElement.className='js'})();</script>
</head>

<body>

<?php
  require_once('headerAfterLogIn.php');
?>

	<div class="wrapper profile" style="max-width: 50em;">
		<article>
		<h2 style="float: left;">Salut, <?php echo $results['username']; ?>!&nbsp;|&nbsp;</h2>
		<h2 style="float: left;">Balan&#355;&#259;: <?php echo $results['balanta']; ?> RON</h2>
		<br />
	    	<hr class="limitator" style="min-width: 45em">
	    	
	    	<div class="profilePage">
    			<div class="info">
			        <p>
			            <strong>Username:</strong>
			            <span><?php echo $results['username']; ?></span>
			        </p>
			        <p>
			            <strong>Email:</strong>
			            <span><?php echo $results['email']; ?></span>
			        </p>
			        <p>
			            <strong>First Name:</strong>
			            <span><?php echo $results['prenume']; ?></span>
			        </p>
			        <p>
			            <strong>Last Name:</strong>
			            <span><?php echo $results['nume']; ?></span>
			        </p>
			        <p>
			            <strong>Birth date:</strong>
			            <span><?php echo $results['data_nastere']; ?></span>
			        </p>
			        <p>
			            <strong>Address:</strong>
			            <span><?php echo $results['adresa']; ?></span>
			        </p>
    			</div>
    			<div style="clear:both"></div>
			</div>
		</article>
	</div>

<?php
	require_once('footer.php');
?>

<script src="js/navigation.js"></script>

</body>
</html>
