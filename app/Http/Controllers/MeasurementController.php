<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    public function index()
    {
        return view('caramengukur'); // Ensure this matches your Blade view file name
    }
}
