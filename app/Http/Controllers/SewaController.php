<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SewaController extends Controller
{
    public function index()
    {
        $sewa = Sewa::with('programStudi')->latest()->
    }
}
