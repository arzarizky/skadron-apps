<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrmController extends Controller
{
    public function index()
    {
        return view('user.crm.index');
    }

    public function addcrm()
    {
        return view('user.crm.add-crm');
    }

    public function detailcrm()
    {
        return view('user.crm.detail-crm');
    }

    public function updatecrm()
    {
        return view('user.crm.update-crm');
    }
}
