<?php

namespace App\Http\Controllers;
use App\Facades\SaraApi;
use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class WelcomeController extends Controller
{

  public function index(Request $request)
  {


    $packages=SaraApi::get('v1/packages');
    $mainTopics=SaraApi::get('v1/mainTopics');
    dd($packages);
    // dd($mainTopics);
    // print_r( $data->name);
    return view('welcome', compact('mainTopics'));

  }
}
