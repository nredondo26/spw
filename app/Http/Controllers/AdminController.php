<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\Dispositivos;
use App\Chat;
use App\Mensajes;
use App\Contactos;
use DB;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('usuariosg');
    }

    public function index()
    {

    	$id_usuario=Auth::guard('usuarios')->user()->id;
        $dispositivos=DB::table('dispositivos')
        ->join('usuarios', 'usuarios.id', '=', 'dispositivos.id_usuario')      
        ->select('dispositivos.*')
        ->where('usuarios.id','=',$id_usuario)
        ->get();

        return view('welcome',compact('dispositivos'));
    }

    public function llamadas($id)
    {
        $id_usuario=Auth::guard('usuarios')->user()->id;
        $dispositivos=DB::table('dispositivos')
        ->join('usuarios', 'usuarios.id', '=', 'dispositivos.id_usuario')      
        ->select('dispositivos.*')
        ->where('usuarios.id','=',$id_usuario)
        ->get();

        $nombre_dispo=DB::table('dispositivos')   
        ->select('dispositivos.*')
        ->where('dispositivos.id','=',$id)
        ->get();

        return view('llamadas',compact('dispositivos','nombre_dispo'));
    }

    public function contactos($id)
    {
        $id_usuario=Auth::guard('usuarios')->user()->id;
        $dispositivos=DB::table('dispositivos')
        ->join('usuarios', 'usuarios.id', '=', 'dispositivos.id_usuario')      
        ->select('dispositivos.*')
        ->where('usuarios.id','=',$id_usuario)
        ->get();

        $nombre_dispo=DB::table('dispositivos')   
        ->select('dispositivos.*')
        ->where('dispositivos.id','=',$id)
        ->get();

        return view('contactos',compact('dispositivos','nombre_dispo'));
    }

    public function mensajes($id)
    {
        $id_usuario=Auth::guard('usuarios')->user()->id;
        $dispositivos=DB::table('dispositivos')
        ->join('usuarios', 'usuarios.id', '=', 'dispositivos.id_usuario')      
        ->select('dispositivos.*')
        ->where('usuarios.id','=',$id_usuario)
        ->get();

        $nombre_dispo=DB::table('dispositivos')   
        ->select('dispositivos.*')
        ->where('dispositivos.id','=',$id)
        ->get();

        return view('mensajes',compact('dispositivos','nombre_dispo'));
    }

    public function ubicacion($id)
    {
        $id_usuario=Auth::guard('usuarios')->user()->id;
        $dispositivos=DB::table('dispositivos')
        ->join('usuarios', 'usuarios.id', '=', 'dispositivos.id_usuario')      
        ->select('dispositivos.*')
        ->where('usuarios.id','=',$id_usuario)
        ->get();

        $nombre_dispo=DB::table('dispositivos')   
        ->select('dispositivos.*')
        ->where('dispositivos.id','=',$id)
        ->get();

        return view('ubicacion',compact('dispositivos','nombre_dispo'));
    }

    public function whatsapp($id)
    {
        $id_usuario=Auth::guard('usuarios')->user()->id;
        $dispositivos=DB::table('dispositivos')
        ->join('usuarios', 'usuarios.id', '=', 'dispositivos.id_usuario')      
        ->select('dispositivos.*')
        ->where('usuarios.id','=',$id_usuario)
        ->get();

        $nombre_dispo=DB::table('dispositivos')   
        ->select('dispositivos.*')
        ->where('dispositivos.id','=',$id)
        ->get();

        $chats=DB::table('chat')   
        ->select('chat.*')
        ->where('chat.id_dispositivos','=',$id)
        ->get();

        return view('whatsapp',compact('dispositivos','nombre_dispo','chats'));
    }


    public function whatsappchat($id)
    {
        $id_usuario=Auth::guard('usuarios')->user()->id;
        $dispositivos=DB::table('dispositivos')
        ->join('usuarios', 'usuarios.id', '=', 'dispositivos.id_usuario')      
        ->select('dispositivos.*')
        ->where('usuarios.id','=',$id_usuario)
        ->get();

        $chats=DB::table('chat')    
        ->join('dispositivos', 'chat.id_dispositivos', '=', 'dispositivos.id')  
        ->select('chat.*','dispositivos.nombre')
        ->where('chat.id','=',$id)
        ->get();

        $mensajes=DB::table('mensajes')    
        ->join('chat', 'mensajes.id_chat', '=', 'chat.id')  
        ->select('mensajes.*')
        ->where('chat.id','=',$id)
        ->orderBy('mensajes.fecha', 'desc')
        ->get();

        return view('whatsappchat',compact('dispositivos','chats','mensajes'));

    }
    

    

}
    


