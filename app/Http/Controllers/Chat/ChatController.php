<?php

namespace App\Http\Controllers\Chat;

use App\Events\ChatEvent;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Lib\PusherFactory;
use Pusher\Pusher;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('chat.chat');
    }

    public function send(Request $request){
        //return $request->all();
        $user=User::find(Auth::id());
        event(new ChatEvent($request->message,$user));
    }

    /*public function send(){
        $message='ok';
        $user=User::find(Auth::id());
        event(new ChatEvent($message,$user));

        //PusherFactory::make()->trigger('chat', 'send',  $message);
    }*/
}
