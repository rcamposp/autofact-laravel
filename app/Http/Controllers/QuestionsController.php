<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\Auth;

class QuestionsController extends Controller
{        
    public function index(Request $request)
    {    
        $answers = Storage::get(base_path('answers/'."answers.json"));        
        $data = json_encode([
            "rol" => Auth::user()->role,
            "respuesta" => $request->answer, 
            "email" => Auth::user()->email, 
            "timestamp" => time()
        ]);    
        
        Storage::append(base_path('answers/'."answers.json"), $data);                
        $request->session()->flash('status', 'Gracias por tu respuesta!');
        return redirect()->action('HomeController@index');
    }
    
}
