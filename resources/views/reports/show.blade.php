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

    <div class="container" id="mainContent">

      <div class="card-section">
        <div class="container">
          <div class="card bg-white mb30">
          </div>

                
          {{-- Report Section Header Discliamer --}}
          <div class="row">
            <div class="col-sm-12">
              <div class="card card-plain">
                <div class="">
                  <button type="button" class="card-header card-header-secondary purple py-0 slide-collapse col-12">
                    <h2 class=" row px-2"><i class="fa fa-chevron-up  ml-auto mr-1 collapse-icon"></i></h2>
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
          </div>{{-- Report Section Header Discliamer End --}}


          {{-- Report Section Header Idea --}}
          <div class="card card-plain">
            <div class="">
              <button type="button" class="card-header card-header-secondary purple py-0 slide-collapse col-12">
                <h2 class=" row px-2"><i class="fa fa-chevron-up  ml-auto mr-1 collapse-icon"></i></h2>

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
                    {!!$idea->description!!}
                  </div>
                </div>

              </div>
            </div>
            @endforeach         
          </div>{{-- Report Section Header Idea End--}}

          {{-- Report Question--}}
          @if (isset($report->questions))
          <div class="card">
            {{-- <h1>Question Body</h1> --}}
            @php
            $count=0;
            @endphp
                
            @foreach ($report->questions as $question)
              <div class="p-0 mt-5">
              <div class="col-sm-12 p-0">
                <div class="card card-plain m-0">
                  <div class="">
                    <button type="button" class="card-header card-header-primary purple py-0 slide-collapse col-12">
                      <h2 class="row px-2 text-left" id="readid-{{$count++}}">{{ $count.' '.$question->question}}
                        <span class="text-primary">{{$question->answer}}</span> 
                        <i class="fa fa-chevron-up ml-auto mr-1 collapse-icon"></i>
                      </h2>

                    </button>
                  </div>
                  <div class="card-body p-0">

                    <div class="row d-flex flex-row-reverse m-0">
                      @if ($question->disclaimers)

                      @foreach ($question->disclaimers as $disclaimer)
                      @if ($disclaimer)
                      <div class=" col-sm-12  px-0 " id="disclaimerDiv">
                        <div class=" mt-2 border border-danger">
                          <div class="card m-0 mb-3">
                            <div class=" p-2 ">
                              <h3 class="title row px-3 my-0 global-disclaimer text-danger">
                                <i class="fa fa-info-circle md-20 col-xs-1 my-auto mx-auto mx-md-0"></i>
                                <span class="my-auto col h-50"> {{$disclaimer->title}}</span>
                              </h3>

                            </div>
                            <div class="card-body  p-2">
                              @if ($disclaimer->image)

                              <div class="d-flex justify-content-center">
                                <img class="rounded" src="{{$disclaimer->image}}" alt="">
                              </div>
                              @endif
                              @if ($disclaimer->description)

                              <div class=" disclaimer-body-text text-left">
                                {!!$disclaimer->description!!}
                              </div>
                              @endif

                              

                            </div>
                          </div>
                        </div>
                      </div>

                      @endif
                      @endforeach
                      @endif



                    <div class="mt-0 p-0 card card-plain col-sm-12">
                      <div class="card-body p-0 ">
                          @if ( !empty($question->ideas))
                          @foreach ($question->ideas as $idea)
                              @if ($idea)
                              <div class=" row  m-0 ">
                                  <div class="col-sm-12">
                                    <h3 class="title"> {{ $idea->title }} </h3>
                                  </div>

                                  @if ($idea->image)
                                  <div class="mx-auto p-0 pb-2 m-0">
                                      <img src="{{ $idea->image }}" alt="">
                                    </div>
                                  @endif
                                  <div class="{{ $idea->image ? 'col-lg-10':'' }} p-1">
                                    <div class="text-left px-md-3 p-1">
                                     {!! $idea->description !!}
                                    </div>
                                  </div>
                                </div>
                                    @if ($idea->references)
                                  <div class=' p-3 text-right btn-link'>
                                    <a rel='popup' href="/references.php?ideaid=">View References and sources of further information</a>
                                  </div>
                                  @endif


                              @endif
                          @endforeach
                        @endif
                  </div>

                  @if (isset($question->products))
                  <div class="px-4 rel-prod">
                    <div class="">
                      <div class="">
                        <h4 class="title ">Related Products</h4>
                      </div>
                      <div class="row p-0 d-flex justify-content-center justify-content-md-start">
                        @foreach ($question->products as $product)
                            @if ($product)
                            <div class="card mx-2 mt-1 mb-2" style="width: 12rem; height:16rem;">
                              <img class="card-img-top " style="max-height:8rem;" src="{{ $product->image }}" alt="">
                              <div class="card-body text-left mx-auto px-2 py-0">
                                <h5 class="card-title text-dark  py-0 font-14" >{{ $product->name }}</h5>
                              </div>
                              <div class="card-footer justify-content-center">
                                <a href="" class="btn btn-primary btn-round" title="View product" target="_blank">View</a>
                              </div>
                            
                            </div>
                            @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                  @endif

                  @if (isset($question->groupProducts))
                  <div class="px-4 rel-prod">
                    <div class="">
                      <div class="">
                        <h4 class="title ">Related Group Products</h4>
                      </div>
                      <div class="row p-0 d-flex justify-content-center justify-content-md-start">
                        @foreach ($question->groupProducts as $product)
                            @if ($product)
                            <div class="card mx-2 mt-1 mb-2" style="width: 12rem; height:16rem;">
                              <img class="card-img-top " style="max-height:8rem;" src="{{ $product->image }}" alt="">
                              <div class="card-body text-left mx-auto px-2 py-0">
                                <h5 class="card-title text-dark  py-0 font-14" >{{ $product->name }}</h5>
                              </div>
                              <div class="card-footer justify-content-center">
                                <a href="" class="btn btn-primary btn-round" title="View product" target="_blank">View</a>
                              </div>
                            
                            </div>
                            @endif
                        @endforeach
                      </div>
                    </div>
                  </div>
                  @endif
                    </div>
                  </div>
                </div>

                </div>

              </div>
            </div>

            @endforeach
          </div>
          @endif




          <div class="card card-plain">
            <div class="">
              <button type="button" class="card-header card-header-secondary purple py-0 slide-collapse col-12">
                <h2 class=" row px-2"><i class="fa fa-chevron-up  ml-auto mr-1 collapse-icon"></i></h2>

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
                    {!! $idea->description !!}
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