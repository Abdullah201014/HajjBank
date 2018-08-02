<?php
include('dbconfig.php');

    $texta =$_POST['textarea'];
    if (isset($_POST['textarea'])){
    $sql= "INSERT INTO `Objective` (`id`, `Objective`) VALUES (null,'$texta');";
     mysqli_query($conn, $sql);
    }
    header('Location: ../main/about.php');
?>
