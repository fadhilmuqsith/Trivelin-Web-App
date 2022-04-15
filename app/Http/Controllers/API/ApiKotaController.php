<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kota;
use Illuminate\Http\Request;

class ApiKotaController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nama_kota = $request->input('nama_kota');
        

        if ($id) {
            $cities = Kota::with('tour')->find($id);

            if ($cities) {
                return  $cities;
            }
            else {
                return ["data" => null];
            }
        }

        $cities = Kota::with('tour');

        if ($nama_kota) {
            $cities->where('nama_kota','like', '%'. $nama_kota .'%');
        }
       

        return $cities->paginate($limit);
      
    }
}
