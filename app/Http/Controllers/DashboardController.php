<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{

    public function on_book_click($plateNumber, $price)
    {
        return view('booking', ['plateNumber' => $plateNumber, 'price' => $price]);
    }
}
