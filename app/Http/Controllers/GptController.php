<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class GptController extends Controller
{
    public function index(){
        return view('index');
    }

    public function store(Request $request){
        $messages[] = ['role'=>'user', 'content'=>$request->ask];
        $response = OpenAI::chat()->create([
            'model'=>'gpt-3.5-turbo',
            'messages'=>$messages
        ]);

        return back()->with('response', $response->choices[0]->message->content);
    }
}
