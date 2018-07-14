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
<!-- Menu -->
<?php
	require_once('header.php');
	// require_once('headerAfterLogIn.php');
?>
<!-- Content -->
<div class="content">
	<!-- Left Side -->
	<div class="leftSide">
		<?php
			require_once('leftSideAfterLogIn.php');
		?>
	</div>

	<!-- Middle -->
	<div class="middle">
		<?php
			require_once('middle.php');
		?>
	</div>

	<!-- Right Side -->
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
