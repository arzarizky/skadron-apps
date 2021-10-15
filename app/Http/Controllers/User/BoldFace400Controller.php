<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoldFace400Controller extends Controller
{
    public function index()
    {
        return view('user.bold-face.bold-face-400.index');
    }
}
