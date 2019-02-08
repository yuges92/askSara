<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class SaraApi extends Facade
{

public static function getFacadeAccessor()
{
  return 'saraApi';
}
}
