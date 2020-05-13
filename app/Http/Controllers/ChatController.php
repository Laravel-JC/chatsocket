<?php

namespace App\Http\Controllers;

use App\Mensaje;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function show(Request $request)
    {
       if($request->ajax()){
            $iduser = Auth::user()->id;
            $infoUser = User::findOrFail(intval($request->idfriend));
            $mensajes = Mensaje::select('amigos.idusuario','mensajes.mensaje', 'mensajes.visto')
            ->where([['amigos.idusuario', $iduser], ['amigos.idamigo', $request->idfriend]])
            ->orWhere([['amigos.idusuario', $request->idfriend], ['amigos.idamigo', $iduser]])
            ->join('amigos','mensajes.idamigo', '=', 'amigos.id')
            ->get();
            // dd($mensajes);
            return view('chat', [
                'idfriend' => $request->idfriend,
                'name' => $infoUser->name,
                'mensajes' => $mensajes
                ]);

       }else{

            return false;

       }
    }
}
// try {

    //     $infoUser = User::findOrFail(intval($request->idfriend));
    //     $info['status'] = true;
    //     $info['html'] = view('chat', [
    //         'idfriend' => $request->idfriend,
    //         'name' => $infoUser->name
    //         ]);
    //     dd($info['html']);    
    //     return response()->json($info);
    
    // } catch (\Throwable $th) {
    //     return $info;
    // }