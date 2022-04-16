<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Booking;
use App\Http\Requests\StoreBookingRequest;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UpdateBookingRequest;
use App\Mail\BookingMail;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

use RealRashid\SweetAlert\Facades\Alert;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           

        return view('admin_order', [
            "title" => "Order",
            "orders" => Booking::with('tour')->latest()->searchorder(request(['search']))->paginate(15)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingRequest $request)
    {
        //
        // $validateData = $request->validate([
        //     'tour_date' => 'required',
        //     'status' => 'required',
        //     'travel_route' => 'required',
        //     'booking_code' => $this->generateUniqueCode(),'required',
        //     'quantity' => 'required',
        //     'name' => 'required',
        //     'phone_number' => 'required',
        //     'email' => 'required',
        //     'address' => 'required',
        //     'tour_id' => 'required',
        // ]);

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
        Mail::to($booking->email)->send(new BookingMail($booking));
        return redirect()->route('home.index')->with('success', 'Berhasil Melakukan Booking');
        
    }

    

    Public function generateUniqueCode(){

        do {

            $code = random_int(100000, 999999);
        } while (Booking::where("booking_code", "=", $code)->first());
        return $code;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingRequest  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $booking = Booking::find($request['id']);

        if ($request['status']=='false') {
            $booking->status = false;
        }
        else {
            $booking->status = true;
        }
        

        $booking->save();

        return redirect('/admin/order')->with('success', 'Status Pembayaran Telah Diperbarui');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $booking)
    {
        //
    }

    public function cekbook(Request $request){
        $validated = $request->validate([
            "booking_code" => 'required',
            'email' => 'required|email:dns',
        ]);

        if ($validated) {
            $book =  Booking::with('tour')
                    ->where('booking_code', $validated['booking_code'])
                    ->where('email',$validated['email'])->first();
        }
        if (!$book) {
            Alert::error('Pemesanan Tidak Ditemukan', 'Pastikan Kode Booking dan Email Benar ');
        
            return back()->with('error', 'Pemesanan Tidak Ditemukan');
        }

        return view('user_cek_booking',[
            "title" => "Cek Booking",
            "book" => $book
        ]);
    }
}
