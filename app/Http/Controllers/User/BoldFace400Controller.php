<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BoldFace;
use PDF;

class BoldFace400Controller extends Controller
{
    public function index()
    {
        $boldFaces = BoldFace::where('type', 'series-400')->get();
        return view('user.bold-face.bold-face-400.index', compact('boldFaces'));
    }

    public function downloadPdf(BoldFace $boldface)
    {
        $pdf = PDF::loadview('pdf.bold-face.series-400', compact('boldface'));
    	return $pdf->inline('laporan-bold-face.pdf');
    }
}
