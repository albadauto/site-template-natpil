<?php
namespace App\Http\Controllers;
use App\Http\Requests\FormMailRequest;
use App\Mail\FormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('home/home');
    }

    public function enviar_email(FormMailRequest $request){
     Mail::to('clinicadranataliapiller@gmail.com', name: 'Adauto')->send(mailable: new FormMail([
                'assunto' => $request->input('assunto'),
                'mensagem' => $request->input('mensagem'),
                'nome' => $request->input('nome'),
                'email' => 'clinicadranataliapiller@gmail.com'
           ]
        ));
        return redirect()->back()->with('success', 'Email enviado com sucesso!');
    }
}
