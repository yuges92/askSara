<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicsController extends Controller
{
  public function index()
  {
    return 'topics';
  }

  public function show($id)
  {
    return view('showTopics');
  }
}
