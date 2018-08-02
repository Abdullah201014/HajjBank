<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="hajj";


//MySQLi Object-Oriented

// Create connection
$conn = new mysqli($servername, $username, $password, $db);


//_Post



//If product id =0 etc..

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


//MySQLi Procedural
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

?>