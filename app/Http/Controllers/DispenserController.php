<?php

namespace App\Http\Controllers;

use App\Http\Requests\DispenserRequest;
use App\Models\DispenserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\returnSelf;

class DispenserController extends Controller
{
    public function index(){
        $dispenser = DispenserModel::get();
        return view('Dispenser.index', ['data_dispenser'=> $dispenser]);
        
    }
    public function create(){
        return view('Dispenser.create'); 
    }

    public function store(DispenserRequest $request)
    {
        try {
            // Ambil data yang divalidasi dari request
            $params = $request->validated();
    
            // Panggil stored procedure untuk memasukkan data
            $result = DB::select('CALL InsertDispenser(?, ?, ?, ?)', [
                $params['dis_no_dispenser'],
                $params['dis_access'],
                $params['dis_lantai'],
                $params['dis_lokasi'],
            ]);
        
            // Cek apakah penyimpanan berhasil
            if ($request) {
                return redirect()->route('Dispenser.index')->with('success', 'Dispenser added successfully!');
            } else {
                return redirect()->back()->with('error', 'An error occurred while adding Dispenser');
            }

        } catch (\Exception $e) {
            // Tangani kesalahan jika ada
            return redirect()->back()->with('error', 'An error occurred while adding Dispenser');
        }
    }


    public function edit($dis_id){
        // Find the dispenser by ID using Eloquent
        $dispenser = DispenserModel::findOrFail($dis_id);
    
        // Pass the dispenser data to the view
        return view('Dispenser.edit', ['dispenser' => $dispenser]);
    }

    public function update(Request $request, $dis_id){
        // Find the dispenser by ID using Eloquent
        $data_dispenser = DB::findOrFail($dis_id);
        // Update the dispenser attributes
        $data_dispenser->dis_mikrocontrollerId = $request->input('dis_mikrocontrollerId');
        $data_dispenser->dis_access = $request->input('dis_access');
        $data_dispenser->dis_lantai = $request->input('dis_lantai');
        $data_dispenser->dis_lokasi = $request->input('dis_lokasi');
    
       
        $data_dispenser->save();
        
        return redirect()->route('Dispenser')->with('success', 'Dispenser updated successfully!');
    }

    public function delete($dis_id)
    {
        $data_dispenser = DispenserModel::findOrFail($dis_id);

            if ($data_dispenser->delete()) {
            return redirect(route('Dispenser'))->with('success', 'Deleted!');
            }

        return redirect(route('Dispenser'))->with('error', 'Sorry, unable to delete this!');
    }
}
