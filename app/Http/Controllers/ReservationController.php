<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('order');
    }

   public function storeReservation(Request $request)
   {
    $validatedData = $request->validate([
        'name' => 'required|string|max:20',
        'email' => 'required|email|max:30',
        'date' => 'required|date',
        'time' => 'required|date_format:H:i',
    ]);

    // Flash message
    session()->flash('success', 'Reservation submitted successfully!');

    // Inserting data into database
    Reservation::create($validatedData);

    // Redirecting back
    return redirect()->route('home');
   }

   public function showReservationForm()
{
    return view('order');
}
}
