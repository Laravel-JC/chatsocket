<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Notificaciones;

class NotificacionController extends Controller
{
    public function notificar(Request $request)
    {
        // dd($request->info);
        event(new Notificaciones($request->receptor,$request->mensaje));

        return true;
    }
}
