<?php  
	$db = mysqli_connect( "localhost", "root", "", "property_rental" );

	if ( $db )  {
		mysqli_set_charset($db, "utf8mb4");
		// echo "Database Connection Successfully";
	}
	else {
		die("Mysqli_Error." . mysqli_error($db));
	}
?>