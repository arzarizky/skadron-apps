<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BoldFace200Controller extends Controller
{
    public function index()
    {
        return view('user.bold-face.bold-face-200.index');
    }
}
