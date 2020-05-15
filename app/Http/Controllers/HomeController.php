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
        ->where('amigos.idusuario', $id)->get()->toArray();
        $info=[];
        foreach ($amigos as $key => $amigo) {            
            $amigo['mensajesNoVistos']=\App\Mensaje::select('mensajes.id')
            ->join('amigos', 'amigos.id', 'mensajes.idamigo')
            ->where([['mensajes.visto', 0],['amigos.idusuario',$amigo['id']],['amigos.idamigo',$id]])
            ->count();;
            $amigos[$key]=$amigo;
        }
        return view('home', ['amigos' => $amigos]);
    }
}
