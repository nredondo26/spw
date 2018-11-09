<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\Dispositivos;
use App\Chat;
use App\Mensajes;

class ApiController extends Controller
{
   public function registra_dispositivo(Request $request)
   {

     $usuario =Usuarios::where('codigo',$request->code_usuario)->first();
       if($usuario)
       {  
          $dispositivos=new Dispositivos();
       	  $dispositivos->id_dispositivos=$request->code_dispositivo;
       	  $dispositivos->nombre=$request->nombre_equipo;
          $dispositivos->id_usuario=$usuario->id;
       	  $dispositivos->save();       
          return response()->json([ 'success' => 'true']);
        }else{
           return response()->json([ 'success' => 'false','message'=>'Codigo de usuario no existe']);
        } 
    }

    public function registra_message_text(Request $request)
    {
    	$dispositivo =Dispositivos::where('id_dispositivos',$request->id_dispositivo)->first();
    	if($dispositivo)
    	{
            $chat=Chat::where('numero', $request->chat)->where('id_dispositivos', $dispositivo->id)->first();
            
            if($chat)
            {
            	$mensaje1=new Mensajes();
            	$mensaje1->fecha=$request->fecha;
            	$mensaje1->hora=$request->hora;
            	$mensaje1->texto=$request->texto;
            	$mensaje1->tipo=$request->tipo;
            	$mensaje1->estado=0;
            	$mensaje1->tipo_mensaje=$request->tipo_mensaje;
            	$mensaje1->id_chat=$chat->id;
            	$mensaje1->save();
              
               return $request;
    	    }else
    	    {

    		  $insert_chat=new Chat();
    		  $insert_chat->numero=$request->chat;
    		  $insert_chat->id_dispositivos=$dispositivo->id;
    		  $insert_chat->save();

    		  $insert_mensaje=new Mensajes();
            	$insert_mensaje->fecha=$request->fecha;
            	$insert_mensaje->hora=$request->hora;
            	$insert_mensaje->texto=$request->texto;        
            	$insert_mensaje->tipo=$request->tipo;
            	$insert_mensaje->estado=0;
            	$insert_mensaje->tipo_mensaje=$request->tipo_mensaje;
            	$insert_mensaje->id_chat=$insert_chat->id;
            	$insert_mensaje->save();

    		  return $request;
    	    }
    	}
    }

    public function register_contact(){


       return "hola";
    }
}
    


