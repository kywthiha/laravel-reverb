<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function sendMessage(Request $request)
    {
        $message = $request->input('message');

        // Broadcast the message
        MessageSent::dispatch($message);

        return response()->json(['status' => 'Message sent successfully!']);
    }
}
