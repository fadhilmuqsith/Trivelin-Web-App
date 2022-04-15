<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Tour;
use Illuminate\Http\Request;

class ApiTourController extends Controller
{
    //
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $title = $request->input('title');
        $description = $request->input('description');
        

        if ($id) {
            $tours = Tour::with('kota')->find($id);

            if ($tours) {
                return $tours;
            }
            else {
                return ["data" => null];
            }
        }

        $tours = Tour::with('kota');

        if ($title) {
            $tours->where('title','like', '%'. $title .'%');
        }
        if ($description) {
            $tours->where('description','like', '%'. $description .'%');
        }

        return $tours->paginate($limit);
      


    }
}
