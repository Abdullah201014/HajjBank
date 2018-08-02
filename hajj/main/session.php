<?php
include('../include/dbconfig.php');
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql = "SELECT * FROM Member where UserName = '".$user_check."' AND password ='".$password."'";
	$result = $conn->query($sql);
header('Location: ../index.php'); // Redirecting To Home Page

?>