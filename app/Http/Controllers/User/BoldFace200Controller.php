<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\BoldFace;
use Illuminate\Http\Request;
use PDF;

class BoldFace200Controller extends Controller
{
    public function index()
    {
        $boldFaces = BoldFace::where('type', 'series-200')->get();
        return view('user.bold-face.bold-face-200.index', compact('boldFaces'));
    }

    public function downloadPdf(BoldFace $boldface)
    {
        $pdf = PDF::loadview('pdf.bold-face.series-200', compact('boldface'));
    	return $pdf->inline('laporan-bold-face.pdf');
    }
}
