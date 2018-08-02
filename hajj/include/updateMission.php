<?php

include('dbconfig.php');
$newMission = $_POST["newMission"];
$response_message = "";
$response_code = "-1";

$sql = "UPDATE  About SET Mission = '$newMission'";

if ($conn->query($sql) === TRUE) {
	$response_message = "Success";
	$response_code = "1";

	//header('location: index.php');
} else {
	$response_message = "Error";
	$response_code = "0";
}
?>