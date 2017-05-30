<?php ob_start(); ?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href="css/login_style.css">
</head>
<body>
  <section class="container">
    <?php
if(isset($_POST['username'])AND isset($_POST['password']))
    {
    $user = "picx7165_pab";
	 $password = "pickabooth042013";
	    
    if($_POST['username'] == "picx7165_pab" and $_POST['password'] == "pickabooth042013")

    {
    header:('Location:php/viewguestbook.php');
    }
        else{
?>  
    <div class="error">Incorrect Username or Password</div>
      <?php

        }}
        ?>
    <div class="login">
      <h1>Login to Web App</h1>
      <form method="post" action="php/viewguestbook.php">
        <p><input type="text" name="login" placeholder="Username or Email"></p>
        <p><input type="password" name="password" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
      </form>
    </div>
 </section>

  
</body>
</html>
