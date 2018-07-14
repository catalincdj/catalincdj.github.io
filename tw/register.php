<?php

session_start();

if( isset($_SESSION['user_id']) ){
  header("Location: index.php");
}

require 'db.php';

$message = '';

if(!empty($_POST['username']) && !empty($_POST['password'])):
  
  // Enter the new user in the database
  $sql = "INSERT INTO users (username, password, email, nume, prenume, adresa, balanta, rol, data_nastere) VALUES (:username, :password, :email, :nume, :prenume, :adresa, :balanta, 'user', :data_nastere)";
  $stmt = $conn->prepare($sql);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':username', $_POST['username']);
  $stmt->bindParam(':password', $password);
  $stmt->bindParam(':email', $_POST['email']);
  $stmt->bindParam(':nume', $_POST['nume']);
  $stmt->bindParam(':prenume', $_POST['prenume']);
  $stmt->bindParam(':adresa', $_POST['adresa']);
  $stmt->bindParam(':balanta', $_POST['balanta']);
  $stmt->bindParam(':data_nastere', $_POST['data_nastere']);

  if( $stmt->execute() ):
    $message = 'Successfully created new user';
  else:
    $message = 'Sorry there must have been an issue creating your account';
  endif;

endif;

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/style.css">
  <title>Register | ACAbet Romania</title>
</head>
<body>
<div class="register">
  <!-- Register Content -->
  <form class="register-content animate" method="POST" action="register.php" autocomplete="on">
  <h1 style="text-align: center;"><a href="index.php">ACAbet Romania</a></h1>
    <h1 style="text-align: center; background-color: orange; color: white;">Create account</h1>

  <div class="container">
  <?php if(!empty($message)): ?>
      <p><?= $message ?></p>
    <?php endif; ?>
      <label><b>First Name</b></label>
      <input type="text" placeholder="Enter First Name" name="prenume" required>
      
      <label><b>Last Name</b></label>
      <input type="text" placeholder="Enter Last Name" name="nume" required>

      <label><b>Birth date</b></label>
      <input type="date" name="data_nastere" required>

      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label><b>E-mail address</b></label>
      <input type="text" placeholder="E-mail" name="email" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label><b>Password again</b></label>
      <input type="password" placeholder="Enter Password again" name="password2" required>

      <label><b>Address</b></label>
      <input type="text" placeholder="Address" name="adresa" required>

      <label><b>Deposit</b></label>
      <input type="number" placeholder="Enter amount [25 - 1000] RON" min="25" max="1000" name="balanta" required>      

      <button type="submit" name="register_btn">Register</button>
    </div>

    <div class="container exit" style="background-color:#f1f1f1">
    <span class="psw">Have account? | <a href="login.php">Sign in</a></span>
    </div>
  </form>
</div>
</body>
</html>