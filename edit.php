<?php

include_once "dbconnection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample Form</title>
</head>
<body>
<h2>Sample Form</h2>

<?php

 $id=$_GET["id"];

$conn = connectDB();

$sql = "SELECT * FROM user where id= '".$id."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

 
    while($row = $result->fetch_assoc()) {

        echo ("
        
    <form action='update.php?id=".$row["id"]."' method='post'>
        <label for='name'>Name:</label><br>
        <input type='text' id='name' name='name' value='".$row["name"]."' required><br>

        <label for='email'>Email:</label><br>
        <input type='email' id='email' name='email' value='".$row["email"]."' required><br>

        <label for='message'>Message:</label><br>
        <textarea id='message' name='message' rows='4' cols='50' required>".$row["description"]."</textarea><br>

        <input type='submit' value='Submit'>
    </form>
        
        
        
        ");
    
    }


}


?>

   
</body>
</html>
