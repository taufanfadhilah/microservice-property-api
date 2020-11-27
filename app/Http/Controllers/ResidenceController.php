<?php

namespace App\Http\Controllers;

use App\Models\Residence;

class ResidenceController extends Controller
{
    public function index()
    {
        $residence = Residence::with('Houses')->get();
        return response()->json([
            'success' => true,
            'message' => 'get all residence',
            'data' => $residence
        ], 200);
    }
}
