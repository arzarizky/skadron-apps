<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Eod;
use Illuminate\Http\Request;

class EodController extends Controller
{
    public function index()
    {
        $eods = Eod::all();
        return view('user.eod.index', compact('eods'));
    }

    public function create()
    {
        return view('user.eod.create');
    }

    public function addeod()
    {
        return view('user.eod.add-crm');
    }

    public function store(Request $request)
    {
        $eod = Eod::firstOrNew(['date' => $request->date]);

        $eod->date = $request->date;
        $eod->title = $request->title;
        $eod->file_pdf = $request->file('file')->store('eod');
        $eod->save();

        return redirect()->route('eod.index')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function detaileod(Eod $eod)
    {
        return view('user.eod.detail-crm', compact('eod'));
    }

    public function updateeod(Request $request, Eod $eod)
    {
        $eod->attention = $request->attention;
        $eod->save();
        return redirect()->route('eod')->with('success',' Data Berhasil Di Update');
    }

    public function destroy(Eod $eod)
    {
        $eod->delete();
        return redirect()->route('eod.index')->with('success',' Data Berhasil Di Hapus');
    }
}
