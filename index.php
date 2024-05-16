
<?php
//this is sample comment for tests. write by maheshika01

include_once "dbconnection.php";

if(isset($_GET["msg"])){

   echo("<p".$_GET['color'].";'>".

   $_GET['msg']."</p>");

}

$conn = connectDB();
$sql = "SELECT * FROM user";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    ?>
    
<table border=1>
    <tr>
        <th>
            Name
        </th>
        <th>
            Email
        </th>
        <th>
            Description
        </th>
        <th>
</th>
<th>
</th>
    </tr>
    <?php
    while($row = $result->fetch_assoc()) {

        echo (      
"           
    <tr>
        <td>
          
            " . $row["name"]. "
           
        </td>
        <td>
           
". $row["email"]. "
           
        </td>
        <td>
           
" . $row["description"]. "
           
        </td>
        <td>
        <a href='delete.php?id=".$row["id"]."'><button>Delete</button></a>
        </td>
        <td>
        <a href='edit.php?id=".$row["id"]."'><button>Edit</button></a>
        </td>
    </tr>

"
);
    
    }
    ?>
</table>
<?php
} else {
    echo "0 results";
}

$conn->close();
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
    <form action="insert.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>

        <input type="submit" value="Submit">
    </form>
</body>

</html>