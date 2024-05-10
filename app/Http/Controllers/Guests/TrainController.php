<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        
        $trains = Train::whereDate('departure', '2024-05-10')->get();
        return view('index', compact('trains'));
    }
}
