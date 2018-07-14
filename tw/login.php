<?php

session_start();

if( isset($_SESSION['user_id']) ){
   header("Location: index.php");
}

require 'db.php';

if(!empty($_POST['username']) && !empty($_POST['password'])):
   
   $records = $conn->prepare('SELECT * FROM users WHERE username = :username');
   $records->bindParam(':username', $_POST['username']);
   $records->execute();
   $results = $records->fetch(PDO::FETCH_ASSOC);

   $message = '';

   if(count($results) > 0 && password_verify($_POST['password'], $results['password']) && $results['rol'] == 'admin'){

      $_SESSION['user_id'] = $results['id'];
      header("Location: admin/admin.php");

   } else if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){

      $_SESSION['user_id'] = $results['id'];
      header("Location: index.php");

   } else {
      $message = 'Sorry, those credentials do not match';
   }

endif;

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/style.css">
   <title>Login | ACAbet Romania</title>
</head>
<body>
<div class="register">
  <!-- Login Content -->
  <form class="register-content animate" method="POST" action="login.php" autocomplete="on">
   <h1 style="text-align: center;"><a href="index.php">ACAbet Romania</a></h1>
   <h1 style="text-align: center; background-color: orange; color: white;">Login</h1>

   <div class="container">
   <?php if(!empty($message)): ?>
      <p><?= $message ?></p>
   <?php endif; ?>

      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required> 

      <button type="submit" name="register_btn">Login</button>
    </div>

    <div class="container exit" style="background-color:#f1f1f1">
    <span class="psw">Not member? Create account. | <a href="register.php">Sign up</a></span>
    </div>
  </form>
</div>
</body>
</html>