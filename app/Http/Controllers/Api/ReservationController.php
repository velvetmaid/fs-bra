<?php

namespace App\Http\Controllers\Api;

use App\Models\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ReservationResource;


class ReservationController extends Controller
{
    public function index()
    {
        $post = Reservation::latest()->paginate(5);
        return new ReservationResource(true, 'List data reservasi: ', $post);
    }
    public function show($id)
    {
        $reservation = Reservation::whereId($id)->first();

        if ($reservation) {
            return new ReservationResource(true, 'Data reservation ditemukan!', $reservation);
        } else {
            return new ReservationResource(false, 'Data tidak ditemukan!', $reservation);
        }
    }

    public function store(Request $request)
    {
        $post = Reservation::create($request->all());
        return new ReservationResource(true, 'Data reservasi berhasil ditambahkan.: ', $post);
    }
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return new ReservationResource(true, 'Data berhasil dihapus.', null);
    }
}
