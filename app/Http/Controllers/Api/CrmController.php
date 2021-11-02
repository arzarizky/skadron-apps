<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Crm;
use Illuminate\Http\Request;

class CrmController extends ApiController
{
    public function index(Request $request)
    {
        $crm = Crm::where('date', $request->date)->first();
        
        return $this->successResponse($crm, "success");
    }
}
