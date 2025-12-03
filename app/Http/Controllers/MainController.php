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


        $booking = Booking::create([
            'phone' => $request->phone,
            'name' => $request->name,
            'mail' => $request->mail,
            'adr_from' => $request->adr_from,
            'adr_to' => $request->adr_to,
            'date_time' => $request->date_time,
            'passengers' => $request->passengers,]);


        $validatedData = $request->validate(
            ['phone' => 'required|string|max:20',
            'name' => 'required|string|max:40',
            'mail' => 'required|string|max:50']);
        
            $user = User::where('phone', $validatedData['phone'])
            ->where('name', $validatedData['name'])
            ->where(function ($query) use ($validatedData) {

                if (!empty( $validatedData['mail'])) {
                    $query->where('mail', $validatedData['mail']);
            }             
            })->first();


            if(!$user) {
                $user = User::create([

                    'phone'=> $validatedData['phone'],
                    'name'=> $validatedData['name'],
                    'mail'=> $validatedData['mail'],
                ]);
            }

            return redirect()->route('main');


}

}
