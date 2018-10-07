<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beverage;

class BeverageController extends Controller
{
    public function index()
    {
        $beverage = Beverage::all();
        return view('beverage.index',compact('beverage'));
    }
}
