<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Crm;
use Illuminate\Http\Request;

class CrmController extends Controller
{
    public function index()
    {
        $crms = Crm::all();
        return view('user.crm.index', compact('crms'));
    }

    public function create()
    {
        return view('user.crm.add-crm');
    }

    public function store(Request $request)
    {
        $crm = Crm::firstOrNew(['date' => $request->date]);

        $crm->date = $request->date;
        $crm->title = $request->title;
        $crm->description = $request->description;
        $crm->save();

        return redirect()->route('crm.index')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function edit(Crm $crm)
    {
        return view('user.crm.detail-crm', compact('crm'));
    }

    public function update(Request $request, Crm $crm)
    {
        $crm->date = $request->date;
        $crm->title = $request->title;
        $crm->description = $request->description;
        $crm->save();

        return redirect()->route('crm.index')->with('success',' Data Berhasil Di Ubah');
    }

    public function destroy(Crm $crm)
    {
        $crm->delete();

        return redirect()->route('crm.index')->with('success',' Data Berhasil Di Hapus');
    }

    public function addcrm()
    {
        return view('user.crm.add-crm');
    }

    public function detailcrm()
    {
        return view('user.crm.detail-crm');
    }

    public function updatecrm()
    {
        return view('user.crm.update-crm');
    }
}
