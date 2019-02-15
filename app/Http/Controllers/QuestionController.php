<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Facades\SaraApi;

class QuestionController extends Controller
{

      public function index()
      {
        return view('question');
      }

      public function show($id)
      {
        $question=SaraApi::get('v1/questions/'.$id);
        $subTopic=SaraApi::get('v1/subTopics/'.$question->subtopic_id);

        // dd($question);
        return view('question', compact('subTopic','question'));
      }

      public function nextQuestion(Request $request)
      {
        dd($request);
      }
}
