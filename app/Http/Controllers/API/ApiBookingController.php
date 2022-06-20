<?php

namespace App\Http\Controllers\API;

use App\Models\Booking;
use App\Mail\BookingMail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ApiBookingController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $booking_code = $request->input('booking_code');
        $email = $request->input('email');
        

        if ($id) {
            $books = Booking::with('tour')->find($id);

            if ($books) {
                return  $books;
            }
            else {
                return ["data" => null];
            }
        }

        $books = Booking::with('tour');

        if ($booking_code) {
            $books->where('booking_code','=', $booking_code);
        }
        if ($email) {
            $books->where('email','=', $email);
        }
       

        return $books->paginate($limit);
      
    }

    public function update(Request $request)
    {
        $booking = Booking::find($request['id']);

        if ($request['status']=='false') {
            $booking->status = false;
        }
        else {
            $booking->status = true;
        }
        

        $booking->save();
        return ["status" => "Orders Has Been Updated"];
    }

    Public function generateUniqueCode(){

        do {

            $code = random_int(100000, 999999);
        } while (Booking::where("booking_code", "=", $code)->first());
        return $code;
    }

    public function cretaeOrder(Request $request)
    {
        $booking = new Booking;
        $booking->tour_date = $request->tour_date;
        $booking->status = 0;
        $booking->booking_code = $this->generateUniqueCode();
        $booking->quantity = $request->quantity;
        $booking->name = $request->name;
        $booking->phone_number = $request->phone_number;
        $booking->email = $request->email;
        $booking->address = $request->address;
        $booking->tour_id = $request->tour_id;
        $booking->save();

        // Booking::create($validateData);
        //Mail::to($booking->email)->send(new BookingMail($booking));
        return ["status" => "Orders Has Been Create"];
    }
}
