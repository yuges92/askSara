<?php

namespace App\Http\Controllers;
use App\Facades\SaraApi;
use Illuminate\Http\Request;

class MainTopicController extends Controller
{
  public function index()
  {
    // $mainTopics=SaraApi::get('v1/mainTopics')->mainTopics;
    $mainTopics=SaraApi::get('v1/mainTopics')->allMainTopics;
    // dd($mainTopics);
    return view('mainTopics', compact('mainTopics'));

  }

  public function show($id)
  {
    $mainTopic=SaraApi::get('v1/mainTopics/'.$id);
    // dd($mainTopic);
    return view('showSubTopics', compact('mainTopic'));
  }
}
