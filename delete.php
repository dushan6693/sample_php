<?php  
include_once "dbconnection.php";

$conn = connectDB();

    $id=$_GET["id"];


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "DELETE FROM user WHERE id = '".$id."'";
    
      
      if ($conn->query($sql) === TRUE) {
        header('location:index.php/?msg=data removed successfully&color=green');  

      } else {
        header('location:index.php/?msg=item cannot remove. please try again&color=red');  
      }
      
       
?>