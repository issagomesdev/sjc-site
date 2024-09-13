<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{
  public function send(Request $request)
  {

      // dd($request->all());

      return redirect()->route('info')
      ->with('message', 'Email enviado com sucesso');
  }
}
