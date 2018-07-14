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
require_once('left_admin.php');
 ?>
</div>

<div class="adminContent">
<h2>Adauga cursa:</h2>
<hr class="limitatorLight">
<form>
		<h3>Cursa</h3>
	<input type="text" name="text" placeholder="Cursa">
		<h3>Jocheu</h3>
	<input type="text" name="text" placeholder="Jocheu">
		<h3>Cal</h3>
	<input type="text" name="text" placeholder="Cal">
		<h3>Vreme</h3>
	<input type="text" name="text" placeholder="Vreme">
		<h3>Data cursa</h3>
	<input type="date" name="text" placeholder="Data cursa">
	<button class="cursaButon">Adauga</button>
</form>
  </div>

<?php
	// require_once('footer.php');
?>

<script src="js/navigation.js"></script>

</body>
</html>
