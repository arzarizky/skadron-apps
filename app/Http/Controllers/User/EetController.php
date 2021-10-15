<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EetController extends Controller
{
    public function index()
    {
        return view('user.eet.index');
    }
}
