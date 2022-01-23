<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Payment;

class BookingController extends Controller
{

    public function store(Request $request)
    {
        $booking = new Booking;
        $booking->custName = $request->custName;
        $booking->plateNumber = $request->plateNumber;
        $booking->price = $request->price;
        $booking->save();
        $this->storePayment($request);
        return redirect()->route("dashboard");
    }
    
    public function storePayment(Request $request)
    {
        $payment = new Payment();
        $payment->custName = $request->custName;
        $payment->paymentMethod = $request->paymentMethod;
        $payment->price = $request->price;
        $payment->save();
    }
    public function s()
    {
        return view('booking', ['plateNumber' => 'plateNumber']);
    }


    public function show()
    {
        $users = DB::select("select custName,paymentMethod, price from payments");
        return view('booking_history', ['users' => $users]);
    }
}
