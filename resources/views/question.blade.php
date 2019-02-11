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


                <li class="breadcrumb-item"><a href="/choose_topic.php?group_id=1023"> Hearing</a></li>


                        <li class="breadcrumb-item"><a href="/questionnaire.php?topic_id=409&amp;redo"> Tinnitus</a></li>
                      </ol>

                          <h1 class="page-title"> Tinnitus</h1>
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
                        <h2>Have you had your tinnitus assessed? </h2>
                  <form class="container p-0" action="questionnaire.php" method="get" id="questionnaire_form">
            <fieldset>
              <legend class="sr-only ">Answers</legend>
                                  <div class="radio-group" >
                      <div class="form-check">
                        <label class="form-check-label text-dark" for="answer_id26">
                          <input id="answer_id26" class="form-check-input" type="radio" name="answer_id" value="26">
                          Yes                          <span class="circle" >
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </div>
                                                        <div class="radio-group" >
                      <div class="form-check">
                        <label class="form-check-label text-dark" for="answer_id27">
                          <input id="answer_id27" class="form-check-input" type="radio" name="answer_id" value="27">
                          No                          <span class="circle" >
                            <span class="check"></span>
                          </span>
                        </label>
                      </div>
                    </div>

              <input type='hidden' name='question_id' value='954' />
              <input type='hidden' name='topic_id' value='409' />

            </fieldset>

            <div class=" mb-0 pb-0  div-button-fixed">
              <button class="mx-auto mx-md- btn btn-primary" type="submit" name="button">Next <i class="	fa fa-chevron-circle-right"></i></button>
            </div>
          </form>
            </div>

                             <div class="col-sm-8 col-lg-2 mx-auto questions-image">
            <img class="rounded  h-100" src="https://images.dlf.org.uk//sara4/dynamic/statements/954.jpg" alt="" >
          </div>

                </div>

            </div>
            <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">

              </div></div>
            </div>
            </div>



<!--

<div class="container mb-3 questionnaire">
  <div class="brand title">
    <h1>Tinnitus</h1>
  </div>
  <p class="question-description">For people who experience tinnitus, a range of product ideas and advice.</p>
</div>-->
























          <div class="container-fluid ">
        <div class="card card-plain mx-auto mt-1  col-lg-6 ">
      <span class="text-gray card-text text-center mx-auto ">
                        25% completed
      </span>
      <div class="d-flex justify-content-center">
        <div class="text-center col-12 ">
          <div class="progress ">
            <div class="progress-bar bg-success  active progress-bar-striped" role="progressbar" style="width:25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>

        </div>
      </div>

    </div>

        </div>

        </div>
    </div>
@endsection
