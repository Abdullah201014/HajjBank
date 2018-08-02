<?php
include('dbconfig.php');

    $n = $_GET['id'];
    $sql= "DELETE FROM `Objective` WHERE id =". $n ."";
    mysqli_query($conn, $sql);
?>
