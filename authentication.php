<?php
session_start();
require "connect.php";
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['username'], $_POST['pword']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, pword,fname,lname, position FROM accounts WHERE username = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $pword,$fname,$lname, $position);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password the OG password (I need to hash the password wish sha1 or md5 or anything) 
        // in your registration file to the passwords.
        if ($_POST['pword'] === $pword) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['fname'] = $fname; 
			$_SESSION['lname'] = $lname; 
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $_POST["username"];
            $_SESSION['position'] = $position; 
			header('Location: index.php');
        } else {
            // Incorrect password
            include ('login.php');
			
            echo'<p style="padding-top:10px; margin-left:875px; color: red;"><i>Invalid Password</i></p>';
        }
        
    } else {
        // Incorrect username
        include ('login.php');
        echo'<p style="padding-top:10px; margin-left:875px; color: red;"><i>Invalid Username</i></p>';
    }

	$stmt->close();
}
?>
