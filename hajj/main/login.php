<?php
session_start(); 
$error=''; 
include('dbconfig.php');
if ($_POST) {
$UserName=$_POST['UserName'];
$password=$_POST['password'];
$UserName = stripslashes($UserName);
$password = stripslashes($password);
$sql = "SELECT * FROM Member where UserName = '".$UserName."' and password ='".$password."'";
$id=$row['mid'];

$result = $conn->query($sql);
if ($result->num_rows == 0) {
echo "<h1 style='color:red'>user is not authenticated</h1>";
$error = "Username or Password is invalid";
header('location: ../index.php');
} 
else { 
	$row = $result->fetch_assoc();
	$_SESSION['login_user']=$UserName;
	$_SESSION['FName']=$row['FName'];
	$_SESSION['Lname']=$row['LName'];
	$_SESSION['password']=$row['password'];
	$_SESSION['mid']=$row['mid'];
	$_SESSION['BirthDate']=$row['BirthDate'];
	$_SESSION['Role']=$row['Role'];
	$_SESSION['position']=$row['position'];
	$_SESSION['Mobile']=$row['Mobile'];
	$_SESSION['City']=$row['City'];
	$_SESSION['Country']=$row['Country'];
	$_SESSION['Email']=$row['Email'];
	$_SESSION['balance']=$row['balance'];
	echo "<h1 style='color:green'>user is authenticated</h1>";
	header('location: ../index.php');
	}
}
?>