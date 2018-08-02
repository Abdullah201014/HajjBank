<?php

include 'dbconfig.php';

$id = $_POST["id"];
$Role = $_POST["Role"];
$sql = "UPDATE  Member SET Role = '".$Role."' WHERE mid = '".$id."'";

if ($conn->query($sql) === TRUE) {
	$response_message = "Success";
	$response_code = "1";

	//header('location: index.php');
} else {
	$response_message = "Error";
	$response_code = "0";
}
?>