<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Http\Requests\StoreTourRequest;
use App\Http\Requests\UpdateTourRequest;
use App\Models\kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin_tour', [
            "title" => "Tour",
            "tours" => Tour::all()
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
        return view('admin_create_tour', [
            "title" => "Tambah Tour",
            "add_tours" => Tour::all(),
            $kota = kota::all()
        ], compact('kota'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTourRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTourRequest $request)
    {
        //

        $validateData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'travel_route' => 'required',
            'itinary' => 'required',
            'price' => 'required',
            'price_detail' => 'required',
            'image' => 'file|image|mimes:jpeg,png,jpg|max:10240',
            'id_kota' => 'required',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('upload_image');
        }



        // Tour::create([
        //     'title' => $request->title,
        //     'description' => $request->description,
        //     'travel_route' => $request->travel_route,
        //     'price' => $request->price,
        //     'image' => $request->file('image')->store('upload_image'),
        // ]);

        Tour::create($validateData);

        return redirect()->route('tour.index')->with('success', 'Tambah tour berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function show(Tour $tour)
    {
        //
        return view('admin_show_tour', [
            'tour' => $tour,
            "title" => "Detail Tour",
            "tours" => Tour::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function edit(Tour $tour)
    {
        //

        return view('admin_edit_tour', [
            'tour' => $tour,
            "title" => "Edit Tour",
            "add_tours" => Tour::all(),
            $kota = kota::all()
        ], compact('kota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTourRequest  $request
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTourRequest $request, Tour $tour)
    {
        //
        $rules = [
            'title' => 'required',
            'description' => 'required',
            'travel_route' => 'required',
            'itinary' => 'required',
            'price' => 'required',
            'price_detail' => 'required',
            'image' => 'file|image|mimes:jpeg,png,jpg|max:10240',
            'id_kota' => 'required',
        ];

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                # code...
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('upload_image');
        }




        $tour->update($validateData);

        // Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect()->route('tour.index')->with('success', 'Update Berhasil ');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tour  $tour
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tour $tour)
    {
        //
        if ($tour->image) {
            # code...
            Storage::delete($tour->image);
        }
        Tour::destroy($tour->id);

        return redirect()->route('tour.index')->with('Berhasil', 'Tour Berhasil di Hapus!');
    }
}
