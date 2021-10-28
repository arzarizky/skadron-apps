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
        return view('user.eet.index',compact('eets'));
    }
}
