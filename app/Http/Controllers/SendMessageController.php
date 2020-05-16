<?php

namespace App\Http\Controllers;

use App\Events\MyEvent;
use Illuminate\Http\Request;

class SendMessageController extends Controller
{
    public function index()
    {
        return view('pages.message');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $data['title'] = $request->input('title');
        $data['content'] = $request->input('content');

        event(new MyEvent($data));
        return redirect()->route('send');
    }
}
