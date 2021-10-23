<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EodController extends Controller
{
    public function index()
    {
        return view('user.eod.index');
    }

    public function addeod()
    {
        return view('user.eod.add-crm');
    }

    public function detaileod()
    {
        return view('user.eod.detail-crm');
    }

    public function updateeod()
    {
        return view('user.eod.update-crm');
    }
}
