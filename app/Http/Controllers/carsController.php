<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\car;

class carsController extends Controller
{
    public function index()
    {
    	$cars = car::all();

    	return view('test.test', compact('cars'));
    }

    public function show(car $car)
    {
    	// $car = car::find($id);

    	return view('test.show', compact('car'));
    }
}

