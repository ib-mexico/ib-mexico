<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;


class ContactController extends Controller
{
    public function sendMessaje(Request $r) {

        $mail       = $r->input('inpMail');
        $nombre     = $r->input('inpNombre');
        $mensaje    = $r->input('txtMensaje');

        Mail::send('components.ContactMail',  ['nombre' => $nombre, 'mensaje' => $mensaje, 'mail' => $mail], function($message) use ($mail, $nombre, $mensaje) {
            $message->from($mail, 'ib-mexico.com');
            $message->to('carlos.landero@ib-mexico.com');
            $message->subject($nombre);
        });

        return ['return' => true, 'text' => 'Se ha enviado el mensaje'];
    }
}
