<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Eod;
use Illuminate\Http\Request;

class EodController extends ApiController
{
    public function index(Request $request)
    {
        $eod = Eod::where('published_at', $request->published_at)->first();

        return $this->successResponse($eod, "success");
    }
}
