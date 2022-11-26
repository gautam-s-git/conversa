<?php
namespace Realtime\Conversa;

use Illuminate\Support\ServiceProvider;

class ConversaServiceProvider extends ServiceProvider{
    public function boot(){
     $this->loadRoutesFrom(__DIR__.'/routes/web.php');
     $this->loadViewsFrom(__DIR__.'/views','conversa');
     $this->loadMigrationsFrom(__DIR__.'/database/migrations/');
    }

    public function register(){

    }
}




?>