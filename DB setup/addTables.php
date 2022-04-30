
<!DOCTYPE html>  
 
<html> 
    <head meta charset="UTF-8"> 
        <title>Add tables</title>
        <link href="./aindex.css" type="text/css" rel="stylesheet"/>
    </head> 
	<body>

		<?php
		$host = "localhost";
		$user = "rtognoni1";
		$pass = "rtognoni1";
		$dbname = "rtognoni1";

		// Create connectoin
		$conn = new mysqli($host, $user, $pass, $dbname);
		// Check connectoin
		if ($conn->connect_error) {
			echo "Could not connect to server\n";
			die("Connection failed: " . $conn->connect_error);	
		}
		else {
			echo "Connection established\n";
			
			// table for user info
			$userTable = "CREATE TABLE USERS (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				username VARCHAR(20) NOT NULL UNIQUE,
				usrType VARCHAR(6) NOT NULL,
				password VARCHAR(20) NOT NULL,
				firstName VARCHAR(35) NOT NULL,
				lastName VARCHAR(35) NOT NULL,
				email VARCHAR(45),				
				creditCard INT(20),
				creditType VARCHAR(20),
				creditSecurity INT(4)
			);";
			
			
			// table for property info 
			$propTable  = "CREATE TABLE PROPERTIES (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				ownerID INT(6) UNSIGNED NOT NULL,
				ownerFName VARCHAR(35),
				ownerLName VARCHAR(35),
				title VARCHAR (25),
				address1 VARCHAR(30),
				address2 VARCHAR(30),
				city VARCHAR(25),
				state VARCHAR (2),
				zip VARCHAR(5),
				dateConstruct DATE,
				sqrFt INT(10),
				bedrooms INT(3),
				garden BIT(1),
				parking BIT(1),
				addons VARCHAR(50),
				nearby VARCHAR(50),
				roadProximity VARCHAR(50),
				value DECIMAL(19,4),
				soldFor DECIMAL(19,4),
				buyerID INT(6) UNSIGNED					
			);";
			
			
			$testEntry = "INSERT INTO
							  PROPERTIES (
								ownerID,
								title,
								address1,
								city,
								state,
								zip,
								dateConstruct,
								sqrFt,
								bedrooms,
								garden,
								parking,
								value
							  )
							values(
								'25',
								'Cool House',
								'123 One two lane',
								'Atlanta',
								'GA',
								'30337',
								'1999',
								'1500',
								'3',
								'1',
								'1',
								'150000.00'
							  );";
			
			// Set the query variable here for what you want to do -Belogus
			if($conn->query($testEntry) === TRUE) {
				echo "User table created!";
			} else {
				"Error with creating table: " . $conn->error;
			}
		}
		
		$conn->close();

		?>
	</body>
</html>