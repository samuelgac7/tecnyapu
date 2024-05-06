<?php

namespace App\Http\Controllers;

use App\Models\APU;
use Illuminate\Http\Request;

class APUController extends Controller
{
    public function store(Request $request)
    {
        $apu = APU::create($request->all());
        
        return redirect()->route('dashboard');
    }
    
    public function update(Request $request, APU $apu)
    {
        $apu->update($request->all());
        
        return redirect()->route('dashboard');
    }
    
    public function destroy(APU $apu)
    {
        $apu->delete();
        
        return redirect()->route('dashboard');
    }
    
    // Agrega otros métodos según tus necesidades
}