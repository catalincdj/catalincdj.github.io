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
<h2>Toate cursele:</h2>
<hr class="limitatorLight">
<div style="margin: 0 30%;">
<table>
<thead>
  <tr style="min-width: 100px;">
    <th style="background-color: #52528C;font-size: 20px; min-width: 100px;">ID</th>
    <th style="background-color: #52528C;font-size: 20px; min-width: 100px;">Nume</th>
    <th style="background-color: #52528C;font-size: 20px; min-width: 100px;">Vreme</th>
    <th style="background-color: #52528C;font-size: 20px; min-width: 100px;">Data</th>
  </tr>
  </thead>
<tbody>
<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);

$sql = 'SELECT * FROM curse';
   mysql_select_db('tw_project');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   echo "<tr>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
   	echo "<tr>";
      echo "<td>{$row['id']}</td> ".
      	 "<td>{$row['nume']}</td> ".
      	 "<td>{$row['vreme']}</td> ".
      	 "<td>{$row['data']}</td> ";
    echo "</tr>";
   }   
   mysql_close($conn);
?>
</tbody>
</table>
</div>
</div>
</div>

<?php
	// require_once('footer.php');
?>

<script src="js/navigation.js"></script>

</body>
</html>
