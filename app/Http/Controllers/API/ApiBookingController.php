<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

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
}
