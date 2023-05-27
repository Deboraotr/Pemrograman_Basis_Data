<?php
require_once "../database/config.php";
// Fetch all products data from database
global $connect;
$result = mysqli_query($connect, "SELECT * FROM reservation ORDER BY id");
?>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
<h1>Reservation</h1>
<a href="add.php">Add Reservation</a><br/><br/>
<table width='80%' border=1>
    <tr>
         <th>id</th> <th>Customer Name</th> <th>Price</th> <th>Room Type</th> <th>Action</th>
    </tr>
    <?php
    while($data = mysqli_fetch_array($result)) {
       
        echo "<td>" . $data['id'] . "</td>";
        echo "<td>" . $data['customer_name'] . "</td>";
        echo "<td>" . $data['price'] . "</td>";
        echo "<td>" . $data['room_type'] . "</td>";
        
        echo "<td><a href='edit.php?id=$data[id]'>Edit</a> | <a href='delete.php?id=$data[id]'>Delete</a></td></tr>";
    }
    ?>
</table>
</body>
</html>