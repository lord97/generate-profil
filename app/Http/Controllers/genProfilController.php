<?php

namespace App\Http\Controllers;

use OpenAI;
use Illuminate\Http\Request;

class genProfilController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $profil = $request->profil;

        $client = OpenAI::client(config('openai.api-key'));

        //documentation on https://beta.openai.com/docs/api-reference/completions/create
        $resultat = $client->completions()->create([
                "model"=> "text-davinci-003",
                "prompt"=> "Ecris-moi un profil sur $profil",
                "max_tokens"=> 600,
                "temperature"=> 0,
                "top_p"=> 1,
                "frequency_penalty"=> 0,
                "presence_penalty"=> 0,
        ]);

        return view('index', [
            'resultat' => trim($resultat->choices[0]->text),
        ]);





        return 'hello';
    }
}
