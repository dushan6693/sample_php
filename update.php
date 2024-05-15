<?php

include_once "dbconnection.php";

$conn = connectDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_GET["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];


$update_q = "UPDATE user SET name='".$name."', email='".$email."', description='".$message."' WHERE id='".$id."'";

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);

}else{
    
    if($conn->query($update_q)==TRUE){

      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }

      header('location:index.php/?msg=data updated successfully&color=green');  
        
    }
}
}

$conn->close();
?>