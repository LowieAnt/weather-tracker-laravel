<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        //$rainfalls = DB::table('weather')->orderBy('date', 'desc')->paginate(10);
        $rainfalls = Weather::orderBy('date', 'desc')->paginate(10); //Puts it in a LengthAwarePaginator
        return view('dashboard', [
            'rainfalls' => $rainfalls
        ]);

    }


}
