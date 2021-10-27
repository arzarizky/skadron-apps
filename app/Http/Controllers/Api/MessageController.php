<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends ApiController
{
    public function broadcast(Request $request)
    {
        $validatedData = $request->validate([
            'message' => 'required|string',
        ]);

        $targetUsers = User::where('role', 'anggota')->get();

        foreach ($targetUsers as $targetUser) {
            Message::create([
                'from_user_id' => auth('api')->user()->id,
                'to_user_id' => $targetUser->id,
                'message' => $request->message
            ]);
        }

        return $this->successResponse(null, 'success');
    }

    public function getListMessages()
    {
        $dates = Message::select(DB::raw('DATE(created_at) as date'))->where('to_user_id', auth('api')->user()->id)->orderBy('date', 'desc')->groupBy('date')->get();

        $data = array();
        foreach ($dates as $date) {
            $messages = Message::where('to_user_id', auth('api')->user()->id)->whereDate('created_at', $date->date)->with('FromUser')->orderBy('created_at', 'desc')->get();
            $object = [
                "date" => $date->date,
                "messages" => $messages
            ];
            array_push($data, $object);
        }

        return $this->successResponse($data, 'success');
    }

    public function readMessage(Message $message)
    {
        $message->is_read = true;
        $message->save();

        return $this->successResponse($message, 'success');
    }
}
