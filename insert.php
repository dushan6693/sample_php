<?php

include_once "dbconnection.php";

$conn = connectDB();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

$write_q = "INSERT INTO user(name, email, description)VALUES('$name','$email','$message');";

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);

}else{
    
    if($conn->query($write_q)==TRUE){

      if (session_status() == PHP_SESSION_NONE) {
        session_start();
      }

      //echo "New record created successfully";
      //window.open("bag/add.php?id="+$id,"_self");
      header('location:index.php/?msg=data inserted successfully&color=green');  
        
    }
}
}

$conn->close();
?>