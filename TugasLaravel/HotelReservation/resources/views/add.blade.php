<html>
<head>
    <title>Add Reservation</title>
</head>
<body>
<h1>Add Reservation Data</h1>
<a href="/">Back Home</a>
<br/><br/>
<form action="{{ route('reservation.store')}}" method="post" name="form1">
    @csrf
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
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp<input type="submit" name="Submit" value="Add"></td>
        </tr>
    </table>
</form>
</body>
</html>
