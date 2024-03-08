<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;

class StateCityController extends Controller
{
    public function getState() 
    {
        $data['states'] = State::get(["name", "id"]);
        return response()->json($data);
    }

    public function getCity() 
    {
        $data['cities'] = City::get(["name", "id"]);
        return response()->json($data);
    }
}
