<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class WelcomeController extends Controller
{

  public function index()
  {

    $client = new Client();


    $request = $client->get('https://apidev-asksara.dlf.org.uk/authority');
    // $response = $request->getBody()->getContents();
    // return as array
    $contents =$request->getBody()->getContents();
    $data= json_decode($contents);
    dd( $data);


  }
}
