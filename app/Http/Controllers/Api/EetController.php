<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Eet;
use Illuminate\Http\Request;

class EetController extends ApiController
{
    public function getListRoute1()
    {
        $routes = Eet::select('route_1')->groupBy('route_1')->get();
        return $this->successResponse($routes, 'success');
    }

    public function getListRoute2()
    {
        $routes = Eet::select('route_2')->groupBy('route_2')->get();
        return $this->successResponse($routes, 'success');
    }

    public function getRoute(Request $request)
    {
        $validatedData = $request->validate([
            'route_1' => 'required|string',
            'route_2' => 'required|string',
        ]);

        $routes = Eet::where(function($query) use ($request){
                        $query->where('route_1', $request->route_1);
                        $query->where('route_2', $request->route_2);
                    })
                    ->orWhere(function($query) use ($request){
                        $query->where('route_2', $request->route_1);
                        $query->where('route_1', $request->route_2);
                    })
                    ->get();
        return $this->successResponse($routes, 'success');
    }
}
