<?php
include_once("assets\bootstrap.php");
$email = $_POST['email'];
$pw = $_POST['password'];
if(val_log($email, $pw)){
    if(md5(getSalt($email) . $pw) === getPw($email))
    {
      //$_SESSION['loggedin'] = true;
      //$_SESSION['email'] = $email;
      header("Location: index.php?msg=Log in successful.");
    }
    else{
      header("Location: login.php?msg=Incorrect email or password.");
    }
  }
  else {
    header("Location: login.php?msg=Incorrect email or password");
  }
 ?>
