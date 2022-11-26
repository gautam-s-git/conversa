<?php

namespace Laravel\Conversa\Http\Controllers;

use App\Http\Controllers\Controller;

Class ConversaController extends Controller{

    public function chatUI(){
        return view('conversa::chat');
    }
}


?>