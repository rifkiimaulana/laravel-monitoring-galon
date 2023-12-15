<?php

namespace App\Http\Controllers;

use App\Models\SensorModel;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    public function index(){
        $sensor = SensorModel::get();
        return view('Sensor.index', ['data_sensor'=> $sensor]);
    }
    public function create(){
        return view('Sensor.create'); 
    }
}
