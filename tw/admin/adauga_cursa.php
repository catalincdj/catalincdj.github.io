<?php
	session_start();
	require '../db.php';

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
  require_once('header.php');
?>

<div class="content">
	<div class="leftSide">
<?php 
require_once('left_admin.php');
 ?>
</div>

<div class="adminContent">
<?php
include '../db.php'; 

if(isset($_POST['nume']) && isset($_POST['vreme']) && isset($_POST['data'])) {
	$nume = $_POST['nume'];
	$vreme = $_POST['vreme'];
	$data = $_POST['data'];
    $sql = "INSERT INTO curse (nume, vreme, data) VALUES ('$nume', '$vreme', '$data')";    
    $conn->exec($sql);
    echo "Cursa a fost adaugata cu succes.";
}
 ?>
<h2>Adauga cursa:</h2>
<hr class="limitatorLight">
<form action="adauga_cursa.php" method="POST">
		<h3>Nume Cursa</h3>
	<input type="text" name="nume" placeholder="Nume cursa" required>
		<h3>Vreme</h3>
	<input type="text" name="vreme" placeholder="Vreme" required>
		<h3>Data cursa</h3>
	<input type="text" name="data" placeholder="Data cursa [yyyy-mm-dd HH:MM:SS]" required>
	<button class="cursaButon" value="submit">Adauga</button>
</form>
  </div>

<?php
	// require_once('footer.php');
?>

<script src="js/navigation.js"></script>

</body>
</html>
