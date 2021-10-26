<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;

use App\Models\User;

class AdminController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = User::where('name','LIKE','%' .$request->search.'%')
            ->orWhere('nomor_anggota','LIKE','%' .$request->search.'%')
            ->orWhere('pangkat','LIKE','%' .$request->search.'%')
            ->orWhere('kualifikasi','LIKE','%' .$request->search.'%')
            ->orWhere('nrp','LIKE','%' .$request->search.'%')
            ->orWhere('role','LIKE','%' .$request->search.'%')
            ->orWhere('phone','LIKE','%' .$request->search.'%')
            ->paginate(5)->withQueryString();
        }else{
            $data = User::paginate(5);
        }

        
        return view('admin.user.index',compact('data'));
    }

    public function adduser(){
        return view('admin.user.add-data');
    }

    public function insertdata(Request $request){
        $data = User::create($request->all());
        $data->password = Hash::make($request->password);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotouser/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin')->with('success',' Data Berhasil Di Tambahkan');
    }

    public function editdata($id){
        
        $data = User::find($id);
        return view('admin.user.edit-data', compact('data'));
    }

    public function updatedata(Request $request, User $user){
        $dataUpdate = $request->all();
        unset($dataUpdate['password']);
        unset($dataUpdate['foto']);

        $user->fill($dataUpdate);

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        if($request->hasFile('foto')){
            $request->file('foto')->move('fotouser/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
        }

        $user->save();
        return redirect()->route('admin')->with('success',' Data Berhasil Di Update');
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->route('admin')->with('success',' Data Berhasil Di Hapus');
    }

    // public function exportpdf(){
    //     $data = Employee::all();

    //     view()->share('data', $data);
    //     $pdf = PDF::loadview('datapegawai-pdf');
    //     return $pdf->download('data.pdf');
    // }

    // public function exportexcel(){
    //     return Excel::download(new EmployeeExport, 'datapegawai.xlsx');
    // }

    // public function importexcel(Request $request){
    //     $data = $request->file('file');

    //     $namafile = $data->getClientOriginalName();
    //     $data->move('EmployeeData', $namafile);

    //     Excel::import(new EmployeeImport, \public_path('/EmployeeData/'.$namafile));
    //     return \redirect()->back();
    // }

    
}
