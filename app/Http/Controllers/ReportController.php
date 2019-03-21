<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\SaraApi;
use Cookie;
use App\Report;
use \Debugbar;
class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //change this to no reports
      if(!Cookie::has('saraUser')){
        return abort(404);
      }


      // $user=Cookie::get('saraUser');
      // $reports=SaraApi::get('v1/reports/users/'.$user);
      // $reports=Report::getReports();
      $topics=Report::getReports();
      // dd($topics);
      return view('reports.index', compact('topics'));
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      //change this to no reports
      if(!Cookie::has('saraUser')){
        return abort(404);
      }

      $user=Cookie::get('saraUser');
      $report=SaraApi::get('v1/reports/users/'.$user.'/subTopics/'.$id);
      // $topics=$reports->completedTopics->topics;
      // dd($report);
      Debugbar::info($report);
      return view('reports.show', compact('report'));

    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
