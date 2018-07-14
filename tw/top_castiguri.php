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
	if( !empty($user) )
		require_once('headerAfterLogIn.php');
	else 
		require_once('header.php');
?>

<div class="content">
	<div class="leftSide">
<?php 
require_once('leftSide.php');
 ?>
</div>

<div class="middle">
<?php
require_once('middleTopPariuri.php');
?>
  </div>
<div class="rightSide">
 <?php 
require_once('bilet.php');
  ?>
</div>
</div>

<?php
	require_once('footer.php');
?>

<script src="js/navigation.js"></script>

</body>
</html>
