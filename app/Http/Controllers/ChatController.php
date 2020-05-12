<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function show(Request $request)
    {
       if($request->ajax()){

            $infoUser = User::findOrFail(intval($request->idfriend));
            return view('chat', [
                'idfriend' => $request->idfriend,
                'name' => $infoUser->name
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