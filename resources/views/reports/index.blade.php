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
                <h1 class="page-title">Your Reports</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.page-header-->

      <div class="card-section">
        <div class="container">
          <div class="card-block bg-white mb30">
          </div>
          <div class="row">
            <div class="col-sm-12">
              <ul class="list-unstyled">
                @foreach ($topics as $topic)
                  <li><a href="reports/{{$topic->subTopic_id}}" class="btn btn-primary">{{$topic->name}}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
