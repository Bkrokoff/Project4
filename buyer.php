<!DOCTYPE html>

<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	//start session
	session_start();
	
	include_once('Buyer_Functions.php');
 ?>
 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Buyer List</title>
  <link rel="stylesheet" href="card.css">
</head>
<body>
	<?php

		if ($_SESSION['newVisitor'] == 0) {
			echo "\n\t<div class='welcome'>\n";
			echo "\t\t<p>Welcome to Mad Props, new buyer!</p>\n";
			echo "\t\t<p>Enter a search query to find houses near you!<p>\n";
			echo "\t\t<p>Then select an interesting property to view the details and buy!</p>\n";
			echo "\t</div>\n";
			$_SESSION['newVisitor'] = 1;
			setVisitorStatus();
		}
	?>
	<h1>Properties to Buy</h1>	

	<div class="searchBar">
		<form action="" method="post">
			<input name="search" type="text" placeholder="Type a zip code or city here">
			<input class="searchButton" type="submit" value="SUBMIT">
		</form>
	</div>
    
	
	<div class="cardBox">
		<?php
			if (isset($_POST["search"]) && strlen($_POST["search"]) > 0) {
				searchProperties($_POST["search"]);
			}
			
		?>
	</div>
	
	
	<br>
	
    <!--
	<a href="addProperty.php" class="">
    <div class="card">
      <img src="./images/AddProperty.jpg">
      <div class="contain">
        <h4>Add Property</h4>
    </div>
    </a>
	-->

</body>
</html>
