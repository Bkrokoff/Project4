<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("SQL_Functions.php");
//start session
session_start();

// Checks if user has clicked login button and makes sure something is entered. 
if (isset($_POST['firstName']) && strlen($_POST['firstName']) > 0) {  
	if ($conn) {
		addUser();
	} else {
		echo "Could not establish connectoin to SQL server";
	}	
}

/*
if (isset($_SESSION['user'])) {

    if (empty($_SESSION['user'])) {
        echo "<h2 class='error'> No Username! </h2>";
    } else {
        header("Location:index.html");
    }
}
*/

?>

<!DOCTYPE html>  
 
<html> 
    <head meta charset="UTF-8"> 
        <title>Mad Props Sign Up</title>
        <link href="./index.css" type="text/css" rel="stylesheet"/>
    </head> 
    
    <body>
        <form class="loginBox" action="" method="post">
            <div class="houseLogo">
                <img src="./images/houseLogo.png">
            </div>
            <h1 class="login"> Sign Up </h1>			
	
			
			<input name="firstName" type="text" placeholder="First Name" required>
            <input name="lastName" type="text" placeholder="Last Name" required>
            <input name="email" type="text" placeholder="Email" required>
            <input name="username" type="text" placeholder="Username" required>
            <input name="password" type="password" placeholder="Password" required>
		
	    <div class="radios">
                <input type="radio" name="type" value="buyer" id="buyers" checked>
                    <label for="buyers">
                        Buyer
                    </label>
        
                <input type="radio" name="type" value="seller" id="sellers">
                    <label for="sellers">
                        Seller
                    </label>
            </div>
		
			<div id="creditInfo">
				<input name="creditcard" type="text" placeholder="creditcard" id="creditcard" required>
				<input name="creditType" type="text" placeholder="creditType" id="creditType" required>
				<input name="securityCode" type="password" placeholder="securityCode" id="securityCode" required>
			</div>
		    <a href="index.html"><input type="submit" name="submit-btn" value="submit" class="signUpButton"></a>
        </form>
		<script src="signUp.js"></script>
    </body> 
</html>
