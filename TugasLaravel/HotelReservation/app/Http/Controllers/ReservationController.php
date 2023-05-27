<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function index()
    {
        $reservation = Reservation::all();

        return view('index', compact('reservation'));
    }

    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_name' => 'required',
            'price' => 'required',
            'room_type' => 'required',
        ]);

        $data = $request->all();
        Reservation::create($data);
        echo "Data Berhasil Tersimpan!" . PHP_EOL;

        return redirect()->route('reservation.index');
    }
    
    public function edit($id)
    {
        $reservation = Reservation::find($id);

        return view('edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $reservation->update([
            'customer_name' => $request->customer_name,
            'price' => $request->price,
            'room_type' => $request->room_type,
        ]);

        return redirect()->route('reservation.index');

    }
    
    public function destroy($id)
    {
        $reservation = Reservation::find($id);
        $reservation->delete();

        return redirect()->route('reservation.index');
    }
}
