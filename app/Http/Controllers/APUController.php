<?php

namespace App\Http\Controllers;

use App\Models\APU;

class APUController extends Controller
{
    public function getSelectedAPUs()
    {
        $selectedAPUs = APU::where('selected', true)->get();
        return response()->json($selectedAPUs);
    }

    public function getAvailableAPUs()
    {
        $availableAPUs = APU::where('selected', false)->get();
        return response()->json($availableAPUs);
    }
}