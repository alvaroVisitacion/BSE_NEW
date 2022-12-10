<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Formulario extends Mailable
{
    use Queueable, SerializesModels;
    public $asunto="BSE mensajes";
    public $mensaje=array();

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensaje)
    {
        $this->mensaje=$mensaje;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->view('emails.formulario'); 
    }
}
