<?php

namespace App\Http\Controllers;


use http\Client\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;


class ChatController extends Controller
{
    public function index() : View
    {
        return view(view:'chat.index');
    }
    
    public function rooms(Request $requst):JsonResponse
    {
        return response()->json([
            'data' => $requst->user()->chatRooms
            ]);
        }
        
        public function messages(FetchMessagesRequest  $requst , ChatRoom $chatRoom)
        {
            return response()->json(
                $chatRoom->messages()
                ->with('sender')
                ->orderBy('created_at','asc')
                ->paginate(25)
            );
        }
        public function newMessage(MessageCreateRequest $request, ChatRoom $chatRoom)
{
        $message = $request->user()->messages()->create(
         
            $request->validated()
        )->load('sender');
        return response()->json(
            $message
        );
}
    }
}

