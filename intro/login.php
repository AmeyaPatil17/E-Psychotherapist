<?php
/* User login process, checks if user exists and password is correct */
session_start();
// Escape email to protect against SQL injections
$email = $mysqli->escape_string($_POST['email']);
$result = $mysqli->query("SELECT * FROM u_profile WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
    $_SESSION['message'] = "User with that email doesn't exist!";
   // header("location: error.php");
}
else { // User exists
    $user = $result->fetch_assoc();

    if ( password_verify($_POST['password'], $user['password']) ) {
        
        $_SESSION['email'] = $user['email'];
        $_SESSION['first_name'] = $user['f_name'];
        $_SESSION['last_name'] = $user['l_name'];
        $_SESSION['Uid'] = $user['Uid'];
        
        // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
		$_SESSION['message'] = "";
        header("location: ../main/examples/dashboard.php");
    }
    else {
        $_SESSION['message'] = "You have entered wrong password, try again!";
        //header("location: error.php");
    }
}


