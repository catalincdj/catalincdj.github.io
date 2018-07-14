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

	<div class="wrapper profile">
		<article>
		<h2>Balanta: 450 RON</h2>
	    	<hr class="limitator">
	    	
	    	<div id="profilePage">
    			<div id="leftCol">
       				<div id="photo">
       					<img src="images/catalin.jpg" alt="Profile Picture">
       				</div>
       				<hr class="limitatorLight">
        			<div id="profileOptions">
       					<h2>Catalin</h2>
        			</div>
    				</div>

    			<div id="info">
			        <p>
			            <strong>First Name:</strong>
			            <span>Catalin</span>
			        </p>
			        <p>
			            <strong>Last Name:</strong>
			            <span>Crainiceanu</span>
			        </p>
			        <p>
			            <strong>Birth Date:</strong>
			            <span>11/Jan/1995</span>
			        </p>
			        <p>
			            <strong>University:</strong>
			            <span>Computer Science, UAIC Iasi</span>
			        </p>
			        <p>
			            <strong>Country:</strong>
			            <span>Romania</span>
			        </p>
			        <p>
			            <strong>City:</strong>
			            <span>Iasi</span>
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
