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

if(isset($_POST['id_cursa']) && isset($_POST['jocheu']) && isset($_POST['cal']) && isset($_POST['cota'])) {
	$id_cursa_in = $_POST['id_cursa'];
	$id_cursa = mysql_real_escape_string($id_cursa_in);
	$jocheu_in = $_POST['jocheu'];
	$jocheu = mysql_real_escape_string($jocheu_in);
	$cal_in = $_POST['cal'];
	$cal = mysql_real_escape_string($cal_in);
	$cota_in = $_POST['cota'];
	$cota = mysql_real_escape_string($cota_in);
    $sql = "INSERT INTO detalii_cursa (id_cursa, nume_jocheu, nume_cal, cota) VALUES ('$id_cursa', '$jocheu', '$cal', '$cota')";    
    $conn->exec($sql);
    echo "Concurentul a fost adaugat cu succes.";
}
 ?>
<h2>Adauga concurent:</h2>
<hr class="limitatorLight">
<form action="adauga_concurent.php" method="POST">
		<h3>ID Cursa:</h3>
	<input type="text" name="id_cursa" placeholder="ID Cursa">
		<h3>Jocheu:</h3>
	<input type="text" name="jocheu" placeholder="Nume jocheu">
		<h3>Cal:</h3>
	<input type="text" name="cal" placeholder=" Nume cal">
		<h3>Cota:</h3>
	<input type="text" name="cota" placeholder="Cota">
	<button class="cursaButon">Adauga Concurent</button>
</form>
  </div>

<?php
	// require_once('footer.php');
?>

<script src="js/navigation.js"></script>

</body>
</html>
