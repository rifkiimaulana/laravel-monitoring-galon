<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DispenserController extends Controller
{
    public function index(){
        return view('Dispenser.index');
    }
    public function create(){
        return view('Dispenser.create');
    }
    public function edit(){
        return view('Dispenser.edit');
    }
}
