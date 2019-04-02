<?php

namespace App\Http\Middleware;

use Closure;
use Cookie;
class UserSession
{
  /**
  * Handle an incoming request.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \Closure  $next
  * @return mixed
  */
  public function handle($request, Closure $next)
  {

    if(!Cookie::has('saraUser')){
      // $user=session()->getId();
      $user='yugeswaran';
      Cookie::queue('saraUser', $user, 15550);
    }

    return $next($request);

  }
}
