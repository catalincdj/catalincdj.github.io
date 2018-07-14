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

<div class="content">
	<div class="leftSide">
<?php 
require_once('leftSideAfterLogIn.php');
 ?>
</div>

<div class="middle">
<?php
require_once('middleCursa.php');
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
