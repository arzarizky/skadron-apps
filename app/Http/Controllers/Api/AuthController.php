<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ActivateAccountRequest;
use App\Http\Requests\Api\ForgotPasswordRequest;
use App\Http\Requests\Api\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DateTime;
use GuzzleHttp\Client;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        $credentials = request(['nomor_anggota', 'password']);
        
        if (! $token = auth('api')->attempt($credentials)) {
            $response['message'] = "Nomor anggota atau password salah!";
            return get_json_response($response, 200);
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

    public function forgotPassword(ForgotPasswordRequest $request)
    {
        $user = User::where('nomor_anggota', $request->nomor_anggota)->first();

        $otp = rand(1000, 9999);

        $user->otp = $otp;
        $user->otp_expired_at = (new DateTime())->modify('+15 minutes')->format("Y-m-d H:i:s");
        $user->save();

        $client = new Client([
            'base_uri' => 'https://console.zenziva.net/wareguler/api/'
        ]);

        $text = "Kode OTP Akun anda adalah " .$otp. ". Rahasiakan kode ini dari siapapun. (SKADRON)";
        $res = $client->post('sendWA', [
            'form_params' => [
                'userkey' => env("SMS_USERKEY"),
                'passkey' => env("SMS_PASSKEY"),
                'to' => $user->phone,
                'message' => $text,
            ]
        ]);

        $response['message'] = "Success, OTP sudah dikirim melalui sms ke hp anda";
        return get_json_response($response);
    }

    public function checkOTP(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_anggota' => 'required|string',
            'otp' => 'required|string',
        ]);

        $user = User::where('nomor_anggota', $request->input('nomor_anggota'))->where('otp', $request->input('otp'))->first();
        if (!$user) {
            $response['message'] = "Wrong OTP";
            return get_json_response($response, 404);
        }

        $today = date("Y-m-d H:i:s");
        $expiredOtp = $user->otp_expired_at;

        $key = Str::random(40);
        $user->key = $key;
        $user->save();

        $response['message'] = "Success";
        $response['data'] = [
            'key' => $key
        ];
        return get_json_response($response);
    }

    public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            'nomor_anggota' => 'required|string',
            'key' => 'required|string',
            'password' => 'required|string',
            'password_match' => 'required|string|same:password'
        ]);

        $user = User::where('nomor_anggota', $request->input('nomor_anggota'))->where('key', $request->input('key'))->first();
        if (!$user) {
            $response['message'] = "User tidak ditemukan";
            return get_json_response($response, 404);
        }

        $password = Hash::make($request->input('password'));
        $user->key = Str::random(40);
        $user->password = $password;
        $user->save();

        $response['message'] = "Success";
        return get_json_response($response);
    }
}
