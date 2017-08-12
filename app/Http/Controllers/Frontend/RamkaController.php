<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RamkaController extends Controller
{
    public function index()
    {
        return view('frontend.my-ramka.index');
    }

    public function buy()
    {
        dd(12);
    }
}
