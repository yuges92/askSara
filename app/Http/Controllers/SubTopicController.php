<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\SaraApi;

class SubTopicController extends Controller
{
  public function index()
  {
    $subTopics=SaraApi::get('v1/subTopics')->subTopics;
    // dd($subTopics);
    return view('subTopics', compact('subTopics'));

  }

  public function show($id)
  {
    $subTopic=SaraApi::get('v1/subTopics/'.$id);
    $question=$subTopic->firstQuestion;
    return view('question', compact('subTopic','question'));

  }


  public function nextQuestion(Request $request, $subTopic_id)
  {
    if($request->question_id=='' ||$request->answer_id=='' ){
      return redirect()->route('subTopics.show', $subTopic_id)->with('Please Select an answer');
    }

    $question_id=$request->question_id;
    $answer_id=$request->answer_id;
    // dd($request);
    $formData['answer_id']=$answer_id;
    // dd($question_id);
    $question=SaraApi::post("v1/questions/{$question_id}", $formData);
    $subTopic=SaraApi::get('v1/subTopics/'.$question->subtopic_id);
    return view('question', compact('subTopic','question'));

  }
}
