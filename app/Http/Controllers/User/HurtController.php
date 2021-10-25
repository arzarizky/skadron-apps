<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Hurt;
use Illuminate\Http\Request;
use PDF;

class HurtController extends Controller
{
    public function index()
    {
        return view('user.hurt.index');
    }

    public function downloadPdf(Hurt $hurt)
    {
        $name = auth()->user()->name;
        $pdf = PDF::loadview('pdf.hurt',compact('hurt', 'name'))->setPaper('a4', 'landscape');
    	return $pdf->inline();
    }
    
    public function detailhurt()
    {
        return view('user.hurt.detail-hurt');
    }
}
