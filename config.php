<?php
$servername = "localhost";
$dbname="astrodata"; // this connects to my database that I created in phpmyadmin
$username = "root";
$password = "";
// Create connection to mysql phpmyadmin
$con=mysqli_connect($servername, $username , $password ,$dbname);
// Check connection and this will check if its false and the will exit if connection failed
if ($con==false) {
  die("Connection failed");
}
echo "";
?>