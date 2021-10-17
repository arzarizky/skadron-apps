<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ActivateAccountRequest;
use App\Http\Requests\Api\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = request(['nomor_anggota', 'password']);
        
        if (! $token = auth('api')->attempt($credentials)) {
            $response['message'] = "Nomor anggota atau password salah!";
            return get_json_response($response, 401);
        }

        $user = auth('api')->user();

        $response['data'] = [
            'access_token' => $token,
            'user' => $user,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ];

        return get_json_response($response);
    }

    public function activateAccount(ActivateAccountRequest $request)
    {
        $user = auth('api')->user();
        
        $user->password = Hash::make(request('password'));
        $user->is_active = true;
        $user->save();

        $response['message'] = "Akun berhasil di aktivasi";
        return get_json_response($response);
    }
}
