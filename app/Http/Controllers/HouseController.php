<?php

namespace App\Http\Controllers;

use App\Models\House;

class HouseController extends Controller
{
    public function index()
    {
        $house = House::with('Residence')->get();
        return response()->json([
            'success' => true,
            'message' => 'get all house',
            'data' => $house
        ], 200);
    }
}
