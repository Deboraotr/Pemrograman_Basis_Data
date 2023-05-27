<?php
// include database connection file
require_once "../database/config.php";
global $connect;
// Check if form is submitted for product update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $customer_name = $_POST['customer_name'];
    $price = $_POST['price'];
    $room_type = $_POST['room_type'];
// update product data
    $result = mysqli_query($connect, "UPDATE reservation SET customer_name='$customer_name', price='$price', room_type='$room_type'
     WHERE id=$id");
// Redirect to homepage to display updated product in list
    header("Location: index.php");
}
?>

<?php
// Display selected product data based on id
// Getting id from url
require_once "../database/config.php";
global $connect;
// Fetch product data based on id
$id = $_GET['id'];
$result = mysqli_query($connect, "SELECT * FROM reservation WHERE id=$id");
while($data = mysqli_fetch_array($result))
{
    $customer_name= $data['customer_name'];
    $price = $data['price'];
    $room_type = $data['room_type'];
}
?>

<html>
<head>
    <customer_name>Edit Reservation Data</customer_name>
</head>
<body>
<h1>Edit Reservation Data</h1>
<a href="index.php">Home</a>
<br/><br/>
<form name="update_product" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>customer_name</td>
            <td>&nbsp : <input type="text" name="customer_name" value=<?php
                echo "\"$customer_name\"";
                ?>></td>
        </tr>
        <tr>
            <td>price</td>
            <td>&nbsp : <input type="numeric" name="price" value=<?php
                echo "\"$price\"";
                ?>></td>
        </tr>
        <tr>
            <td>room_type</td>
            <td>&nbsp : <input type="text" name="room_type" value=<?php
                echo "\"$room_type\"";
                ?>></td>
        </tr>
        
        <tr>
            <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
            <td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                <input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>