<?php
$pagecontents = file_get_contents("forget.html");
$pagecontents1 = file_get_contents("login.html");
  $conn = mysqli_connect("localhost", "root", "", "signup");
#include "connection.php";
#include "login.html";
#include "forget.html";
#include
$forgetemail = $_REQUEST['forgetemail']; 
$forgetspecial = $_REQUEST['forgetspecial']; 
$password1 = $_REQUEST['password1'];


$conn->query("UPDATE createa SET password = MD5('$password1') WHERE email = '$forgetemail' AND special = MD5('$forgetspecial')");

if (($conn->affected_rows) == 1) {
echo '<script>alert("Passwod Changed Successfully")</script>';
echo ($pagecontents1);
 }

else{
echo '<script>alert(" Invalid Email / Special Character :-) ")</script>';
echo ($pagecontents) ;
}
?>