<?php
session_start();
    include "database/database.php";
  if(isset($_GET['guest_id'])){
      $guest_id = $_GET['guest_id']; 
      $deletefromdb = "DELETE FROM guest WHERE guest_id=$guest_id";

    $delete= mysqli_query($databaseconnect, $deletefromdb);
    if($delete){
        $_SESSION['message'] = "Профіль успішно видалено";
        $_SESSION['errorstyle'] = "green";
        header('location: list.php');
      } else {
        $_SESSION['message'] = "Профіль не видалено!!!";
        $_SESSION['errorstyle'] = "red";
        header('location: list.php');
      }
  }
