<html>
<head>
    <title>Homepage</title>
</head>
<body>
<h1>Reservation List</h1>
<a href="{{route('reservation.create')}}">Add New Reservation</a><br/><br/>
<table width='80%' border=1>
    <tr>
        <th>ID</th> <th>Customer Name</th> <th>Price</th> <th>Room Type</th>
        <th>Action</th>
    </tr>
    @foreach ($reservation as $reservations)
        <tr>
            <td>{{ $reservations->id }}</td>
            <td>{{ $reservations->customer_name }} </td>
            <td>{{ $reservations->price }}</td>
            <td>{{ $reservations->room_type }} </td>
            <td>
                <button>
                <a href="{{route('reservation.edit', $reservations->id) }}"
                   class="btn btn-warning btn-sm" style="text-decoration: none;">Edit</a>
                </button>
                <form action="{{route('reservation.destroy', $reservations->id)}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        Delete
                    </button>        
                </form>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
