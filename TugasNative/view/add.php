<html>
<head>
    <title>Add Reservation</title>
</head>
<body>
<h1>Add Reservation Data</h1>
<a href="index.php">Back to Home</a>
<br/><br/>
<form action="add.php" method="post" name="form1">
    <table width="25%" border="0">
        <tr>
            <td>Customer Name</td>
            <td>: <input type="text" name="customer_name"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td>: <input type="numeric" name="price"></td>
        </tr>
        <tr>
            <td>Room Type</td>
            <td>: <input type="text" name="room_type"></td>
        </tr>

        <tr>
            <td></td>
            <td>&nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp<input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>
<?php
// Check If form submitted, insert form data into products table.
if(isset($_POST['Submit'])) {
    $customer_name = $_POST['customer_name'];
    $price = $_POST['price'];
    $room_type = $_POST['room_type'];
// include database connection file
    require_once "../database/config.php";
    global $connect;
// Insert product data into table
    $result = mysqli_query($connect, "INSERT INTO reservation(customer_name, price, room_type) 
              VALUES('$customer_name','$price', '$room_type')");
// Show message when product added
    echo "Reservation added successfully. <a href='index.php'>View Reservation</a>";
}
?>
</body>
</html>