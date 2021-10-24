<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HurtController extends Controller
{
    public function index()
    {
        return view('user.hurt.index');
    }
    public function detailhurt()
    {
        return view('user.hurt.detail-hurt');
    }
}
