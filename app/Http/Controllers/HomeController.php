<?php

namespace App\Http\Controllers;

use App\amigo;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::user()->id;
        $amigos = amigo::select('users.id','users.name')
        ->join('users', 'amigos.idamigo', '=', 'users.id')
        ->where('amigos.idusuario', $id)->get();
        return view('home', ['amigos' => $amigos]);
    }
}
