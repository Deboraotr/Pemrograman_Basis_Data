<html>
<head>
    <title>Edit  Data</title>
</head>
<body>
<h1>Edit Reservation Data</h1>
<a href="/">Home</a>
<br/><br/>
<form name="update_reservation" method="post" action="{{ route('reservation.update', $reservation->id)}}">
    @csrf
    @method('PUT')
    <table border="0">
        <tr>
            <td>Customer Name</td>
            <td>&nbsp : <input type="text" name="customer_name" value="{{$reservation->customer_name}}"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td>&nbsp : <input type="numeric" name="price" value="{{$reservation->price}}"></td>
        </tr>
        <tr>
            <td>Room Type</td>
            <td>&nbsp : <input type="text" name="room_type" value="{{$reservation->room_type}}"></td>
        </tr>
        <tr>
            <td></td>
            <td>&nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp &nbsp &nbsp
                &nbsp <input type="submit" name="update" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
