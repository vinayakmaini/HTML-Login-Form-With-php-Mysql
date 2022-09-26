<html>
<?php
$pagecontents = file_get_contents("2.html");
include "connection.php";    

  	#include
         $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $mobile_number =  $_REQUEST['mobile_number'];
        $password = $_REQUEST['password'];
  	 $special = $_REQUEST['special'];
        $sql = "INSERT INTO createa  VALUES ('$name',
            '$email','$mobile_number',MD5('$password'),MD5('$special'))";
         
        if(mysqli_query($conn, $sql)){
echo($pagecontents);
            echo '<script>alert("Account Created Successfully")</script>';
 
     
        } else{
		echo($pagecontents);
            echo '<script>alert("Try Again With Different Details")</script>';
        }
         
       
        mysqli_close($conn);

?>
<html>