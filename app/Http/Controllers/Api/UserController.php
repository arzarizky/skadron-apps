<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends ApiController
{
    function getProfile()
    {
        $user = auth()->user();

        return $this->successResponse($user, "success");
    }

    public function updatePhotoProfile(Request $request)
    {
        $user = auth()->user();
        if($request->hasFile('foto')){
            // $request->file('foto')->move('fotouser/', $request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->store('fotouser');
        }
        $user->save();

        return $this->successResponse($user, "success");
    }
}
