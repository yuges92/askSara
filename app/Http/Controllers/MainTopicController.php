<?php

namespace App\Http\Controllers;
use App\Facades\SaraApi;
use Illuminate\Http\Request;

class MainTopicController extends Controller
{
  public function index()
  {
    return 'topics';
  }

  public function show($id)
  {
    $mainTopic=SaraApi::get('v1/mainTopics/'.$id);
    // dd($mainTopic);
    return view('showSubTopics', compact('mainTopic'));
  }
}
