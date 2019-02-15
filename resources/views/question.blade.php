@extends('layouts.template')

@section('body')



  <div class="wrapper">

    <!-- Page Content  -->
    <div id="content">


      <!-- page-header -->
      <div class="page-header questionnaire-header">
        <div class="container">
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="page-caption">
                <ol class="breadcrumb m-0 p-2 rounded">

                  <li class="breadcrumb-item"><a href="/"> Home</a></li>

                  <li class="breadcrumb-item"><a href="/choose_topic.php?group_id=1000"> Your health</a></li>

                </ol>

                <h1 class="page-title">{{$subTopic->name}}</h1>
                <!--                          <p class="question-description">For people who experience tinnitus, a range of product ideas and advice.</p>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.page-header-->

      <div class="card-section">
        <div class="container">
          <div class="card-block bg-white mb30">
            <div class="row">
              <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12 col-12">
                <h2>{{$question->description}} </h2>
                <form class="container p-0" action="{{route('nextQuestion',$subTopic->subTopic_id)}}" method="post" id="questionnaire_form">
                  {{ csrf_field() }}
                  <fieldset>
                    <legend class="sr-only ">Answers</legend>
                    @foreach ($question->answers as $answer)

                      <div class="radio-group" >
                        <div class="form-check">
                          <label class="form-check-label text-dark" for="answer_id{{$answer->answer_id}}">
                            <input id="answer_id{{$answer->answer_id}}" class="form-check-input" type="radio" name="answer_id" value="{{$answer->answer_id}}">
                            {{$answer->description}}<span class="circle" >
                              <span class="check"></span>
                            </span>
                          </label>
                        </div>
                      </div>
                    @endforeach


                    <input type='hidden' name='question_id' value='{{$question->question_id}}' />

                  </fieldset>

                  <div class=" mb-0 pb-0  div-button-fixed">
                    <button class="mx-auto mx-md- btn btn-primary" type="submit" name="button">Next <i class="	fa fa-chevron-circle-right"></i></button>
                  </div>
                </form>
              </div>

              <div class="col-sm-8 col-lg-2 mx-auto questions-image">
                <img class="rounded  h-100" src="{{$question->image}}" alt="">
              </div>

            </div>

          </div>
          <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">

            </div>
          </div>
        </div>
      </div>



      <!--

    @endsection
