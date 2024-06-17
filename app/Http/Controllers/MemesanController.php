<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemesanController extends Controller
{
    public function index()
    {
        return view('caramemesan'); // Ensure this matches your Blade view file name
    }
}
