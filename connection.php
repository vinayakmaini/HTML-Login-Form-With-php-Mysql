<?php
$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "signup";
      
        $conn = mysqli_connect("localhost", "root", "", "signup");
         
        // Check connection
        if(!$conn){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
?>