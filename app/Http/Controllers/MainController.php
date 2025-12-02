<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function form_bookings(){
        return view('main');
    }


    public function store_bookings(Request $request){


        $booking = Booking::create(['phone' => $request->phone,
                            'name' => $request->name,
                            'mail' => $request->mail,
                            'adr_from' => $request->adr_from,
                            'adr_to' => $request->adr_to,
                            'date_time' => $request->date_time,
                            'passengers' => $request->passengers,]);
        return redirect()->route('main');


}

}
