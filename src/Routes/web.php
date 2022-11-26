<?php

use Illuminate\Support\Facades\Route;
use Realtime\Conversa\Http\Controllers\ConversaController;

Route::get('/initlize',function(){

    return view('conversa::chat');

    dd('initlize');

});
Route::get('chatui',[ConversaController::class,'chatUI']);
?>