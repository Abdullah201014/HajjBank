<?php

include('dbconfig.php');

$newMem = $_POST["newMem"];
$response_message = "";
$response_code = "-1";

$sql = "UPDATE  About SET ACMProfessionalMembershipBenefits = '$newMem'";

if ($conn->query($sql) === TRUE) {
	$response_message = "Success";
	$response_code = "1";

	//header('location: index.php');
} else {
	$response_message = "Error";
	$response_code = "0";
}
?>