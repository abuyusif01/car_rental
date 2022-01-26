<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{

    public function on_book_click($plateNumber, $price)
    {
        $custName = auth()->user()->name;
        return view('booking', ['plateNumber' => $plateNumber, 'price' => $price, 'custName' => $custName]);
    }
}