<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
class HouseController extends Controller
{
    public function index(Request $request)
    {
        $house = House::query();
        $house->when($request->owner_id, function($query) use ($request){
            return $query->whereOwnerId($request->owner_id);
        });
        return response()->json([
            'success' => true,
            'message' => 'get all house',
            'data' => $house->with('Residence')->get()
        ], 200);
    }
}
