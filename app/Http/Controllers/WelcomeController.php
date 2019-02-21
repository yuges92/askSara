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

    // $mainTopics=SaraApi::get('v1/mainTopics');
// dd($mainTopics);
    $mainTopics=SaraApi::get('v1/mainTopics')->allMainTopics;
    // $mainTopics=SaraApi::get('v1/mainTopics')->customMainTopics;
    // dd($packages);
    // dd($mainTopics);
    // print_r( $data->name);
    return view('welcome', compact('mainTopics'));

  }

  public function packages()
  {
    $packages=SaraApi::get('v1/packages');
  return view('packages', compact('packages'));
  }
}
