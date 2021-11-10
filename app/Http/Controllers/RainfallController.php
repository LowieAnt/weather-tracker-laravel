<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use Illuminate\Http\Request;

class RainfallController extends Controller
{

    public function index()
    {
        return view('addRainfall');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'rainfall' => 'required|int',
            'date' => 'required'
        ]);

        $request->user()->weathers()->create([
            'rainfall' => $request->rainfall,
            'date' => $request->date,
        ]);

        return back();
    }

    public function destroy(Weather $weather)
    {
        $weather->delete();
        return back();
    }
}
