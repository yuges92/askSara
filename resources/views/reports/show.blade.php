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
                <h1 class="page-title">{{$report->title}}</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- /.page-header-->
      {{-- <div class="" id="report-body"> --}}

      <div class="container"  id="mainContent">

        <div class="card-section">
          <div class="container">
            <div class="card bg-white mb30">
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="card card-plain">
                  <div class="">
                    <button type="button" class="card-header card-header-secondary purple py-0 slide-collapse col-12">
                      <h2 class=" row px-2" ><i class="fa fa-chevron-up  ml-auto mr-1 collapse-icon"></i></h2>

                    </button>
                  </div>
                  @foreach ($report->headerDisclaimers as $disclaimer)

                    <div class="col-sm-12 p-0 mt-5">
                      <div class="">
                        <div class="card card-plain ">
                          <div class="">
                            <button type="button" class="card-header card-header-danger py-0 slide-collapse col-12">
                              <h2 class="title row p-2 my-0 global-disclaimer ">
                                <i class="fa fa-info-circle md-20 col-xs-1 my-auto mx-auto mx-md-0"></i>
                                <span class="my-auto text-left col h-50">
                                  {{$disclaimer->title}}
                                </span>
                                <i class="my-auto ml-auto mr-1 fa fa-chevron-up collapse-icon "></i>
                              </h2>
                            </button>
                          </div>

                          <div class="card card-body p-3 mt-2">
                            <div class=" text-dark rounded row">
                              <div class="m-auto ">
                                <div class="">
                                  @if ($disclaimer->image)

                                    <img class="rounded" src="{{$disclaimer->image}}" alt="{{$disclaimer->title}}">
                                  @endif

                                </div>
                              </div>
                              <div class="col-xs-10 col-sm-12 col-md-12 {{($disclaimer->image) ? 'col-lg-8':''}} px-md-3">
                                <p class="text-left  p-1">
                                  {!!$disclaimer->disclaimer!!}
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>


                </div>
              </div>

              <div class="card card-plain">
                <div class="">
                  <button type="button" class="card-header card-header-secondary purple py-0 slide-collapse col-12">
                    <h2 class=" row px-2" ><i class="fa fa-chevron-up  ml-auto mr-1 collapse-icon"></i></h2>

                  </button>
                </div>
                @foreach ($report->headerSectionIdeas as $idea)

                  <div class="card mb-0 mt-2">
                    <div class=" row  m-0 ">
                      <div class="col-sm-12">
                        <h3 class="title"> {{$idea->title}}</h3>
                      </div>
                      @if ($idea->image)
                        <div class="m-auto p-0 pb-2 m-0">
                          <img class=" rounded" style="width:200px;" src="{{$idea->image}}" alt="">
                        </div>
                      @endif
                      <div class=" {{ ($idea->image) ?'col-lg-10': ''}} p-1">
                        <div class="text-left px-md-3">
                          <?=$idea->description ?>
                        </div>
                      </div>

                    </div>
                  </div>
                @endforeach
              </div>


              <div class="card">
                <h1>Question Body</h1>
              </div>




              <div class="card card-plain">
                <div class="">
                  <button type="button" class="card-header card-header-secondary purple py-0 slide-collapse col-12">
                    <h2 class=" row px-2" ><i class="fa fa-chevron-up  ml-auto mr-1 collapse-icon"></i></h2>

                  </button>
                </div>
                @foreach ($report->footerSectionIdeas as $idea)

                  <div class="card mb-0 mt-2">
                    <div class=" row  m-0 ">
                      <div class="col-sm-12">
                        <h3 class="title"> {{$idea->title}}</h3>
                      </div>
                      @if ($idea->image)
                        <div class="m-auto p-0 pb-2 m-0">
                          <img class=" rounded" style="width:200px;" src="{{$idea->image}}" alt="">
                        </div>
                      @endif
                      <div class=" {{ ($idea->image) ?'col-lg-10': ''}} p-1">
                        <div class="text-left px-md-3">
                          <?=$idea->description ?>
                        </div>
                      </div>

                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
        {{-- </div> --}}
      </div>
    </div>
  @endsection
