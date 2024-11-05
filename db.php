<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pengakap_registration";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn->connect_error) 
{
	echo "Connection failed!";
}

?>