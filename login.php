<?php
$pagecontents = file_get_contents("2.html");
$pagecontents1 = file_get_contents("login.html");
  $conn = mysqli_connect("localhost", "root", "", "signup");
#include "connection.php";
#include
$loginemail = $_REQUEST['loginemail']; 
$loginpassword = $_REQUEST['loginpassword']; 

$sql = "SELECT name FROM createa WHERE email = '$loginemail' and password = MD5('$loginpassword')";

 $result = mysqli_query($conn, $sql);

 $count = mysqli_num_rows($result);
  if($count == 1){  
echo ( $pagecontents);
echo ('<script>alert("Successfully Login")</script>');  
        }  
        else{  
	echo ( $pagecontents);
            echo '<script>alert("Login Failed , Invalid Details")</script>';  
	echo ( $pagecontents1);
        }     
?>

