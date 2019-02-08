<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;
class SaraApiServiceProvider extends ServiceProvider
{
  /**
  * Bootstrap services.
  *
  * @return void
  */
  public function boot()
  {
    //
  }

  /**
  * Register services.
  *
  * @return void
  */
  public function register()
  {
    App::singleton('saraApi',function ()
    {
      $username= app('config')->get('saraApi.username');
      $password= app('config')->get('saraApi.password');
      $apiUrl= app('config')->get('saraApi.apiUrl');
      $version= app('config')->get('saraApi.version');
      return new \App\SaraApi($username,$password,$apiUrl,$version);
    });
  }
}
