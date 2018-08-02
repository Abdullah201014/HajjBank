<?php
include('dbconfig.php');

$FName = $_POST["FName"];
$LName = $_POST["LName"];
$BirthDate = $_POST["BirthDate"];
$UserName = $_POST["login_user"];
$password = $_POST["password"];
$Mobile = $_POST["Mobile"];
$OfficePhone = $_POST["OfficePhone"];
$City = $_POST["City"];
$Country = $_POST["Country"];
$Email = $_POST["Email"];
$PersonHomePage = $_POST["PersonHomePage"];

$response_message = "";
$response_code = "-1";

$sql = "UPDATE Member SET FName = '".$FName."',LName = '".$LName."',BirthDate = '".$BirthDate."',UserName = '".$UserName."',password = '".$password."',Mobile = '".$Mobile."',OfficePhone = '".$OfficePhone."',City = '".$City."',Country = '".$Country."',Email = '".$Email."',PersonHomePage = '".$PersonHomePage."'WHERE UserName = '".$UserName."'";

$result = $conn->query($sql);



if ($conn->query($sql) === TRUE) {
	$response_message = "Success";
	$response_code = "1";

	//header('location: index.php');
} else {
	$response_message = "Error";
	$response_code = "0";
}


?>