<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Http\Request;

class newLaravelTips extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
      $request = $request->all();
      $this->subject('Formulario de Contato');
      $this->to('contato@sjcsistemas.com.br', 'SJC');
        return $this->markdown('mail.newLaravelTips', compact('request'));

    }
}
