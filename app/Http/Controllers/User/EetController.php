<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Eet;


class EetController extends Controller
{
    public function index(Request $request)
    {
        $eets = Eet::all(); 
        // dd($eets);
        return view('user.eet.index',compact('eets'));

        
       
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'route_1'   => 'required|string',
            'route_2'   => 'required|string',
            'eet'       => 'required|integer',
        ]);
        Eet::create($request->all());

        return redirect()->route('eet')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function update(Request $request, $id)
    {
        $data_eet = Eet::find($id);

        $request->validate([
            'route_1'   => 'required|string',
            'route_2'   => 'required|string',
            'eet'       => 'required|integer',
        ]);

        $data_eet->update($request->all());

        return redirect()->route('eet')->with('success',' Data Berhasil Di Update');
    }
}
