<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{

    public function home()
    {
        
        $trains = Train::all();
        return view('home', compact('trains'));
    }

    public function index()
    {
        
        $trains = Train::whereDate('departure', now())->get();
        return view('index', compact('trains'));
    }
}
