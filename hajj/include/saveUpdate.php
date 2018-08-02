<?php
include('dbconfig.php');
    $texta =$_POST['textarea'];
    $id =$_POST['id'];
    if (isset($_POST['textarea']))
    {

      $sql ="UPDATE `Objective` SET `Objective` = '$texta' WHERE `id` = '$id';";
      mysqli_query($conn, $sql);
    }
    header('Location: ../main/about.php');
?>
