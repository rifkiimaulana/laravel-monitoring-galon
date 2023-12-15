<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranDeviceController extends Controller
{
    public function index(){
        return view('PendaftaranDevice.index');
    }
}
