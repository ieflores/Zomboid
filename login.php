<?php
// We need to use sessions, so you should always start sessions using the below code.
// If the user is not logged in redirect to the login page...
if(session_id() == '') {
    session_start();
}
if (isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form</title>
    <link rel="stylesheet" href="css_files/login.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="POST" action="authentication.php">
        <div class="txt_field">
          <input type="email" name="email" id="email" required>
          <span></span>
          <label>APC Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="pword" id="pword" required>
          <span></span>
          <label>Password</label>
        </div>
        <label class="cb-container"> <input type="checkbox" required> I agree to the <a href="https://www.privacy.gov.ph/data-privacy-act/">Data Privacy Policy</a></input>
          
          
        </label>
        <input class="button" type="submit" value="Login">
      </form>
    </div>

  </body>
</html>
