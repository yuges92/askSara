<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Facades\SaraApi;
use Cookie;

class Report extends Model{




  public static function getReports()
  {
    if(!Cookie::has('saraUser')){
      return null;
    }


    $user=Cookie::get('saraUser');
    $reports=SaraApi::get('v1/reports/users/'.$user);
    if(!$reports){
      return null;
      
    }
    $topics=$reports->completedTopics->topics;

    return $topics;
  }
}
