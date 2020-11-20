<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $mensagem = $request->session()->get('mensagem');
        return view('index', compact('user', 'mensagem'));
    }
}
