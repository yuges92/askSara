@extends('layouts.template')

@section('body')
  <div class="container">
    <div class="row">
      <div id="myModal" class="modal fade in">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">AskSARA reports</h4>
            </div>
            <div class="modal-body">
              <ul>
                <li> <a href="report.php?topic_id=181">
                  Taking a bath                        </a>
                </li>
              </ul>
              <div class="modal-footer">
                <div class="btn-group">
                  <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                </div>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dalog -->
        </div>
        <!-- /.modal -->
      </div>
    </div>
  </div><!--   <div class="container mt-0 breadcrumb-div" >
  </div>-->
  <!--  <div class="">

  <button  id="myBtn"  class="btn scrollupbtn text-center "><i class="fa fa-chevron-circle-up  " style="font-size:30px"><span class="sr-only">Go to top</span></i></button>
</div>-->




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

                <li class="breadcrumb-item"><a href="/choose_topic.php?group_id=1019"> Daily activities</a></li>


                <li class="breadcrumb-item"><a href="/choose_topic.php?group_id=1072"> Bathing, toileting and personal care</a></li>

              </ol>

              <h1 class="page-title"> Bathing, toileting and personal care</h1>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.page-header-->

    <div class="card-section">




      <div class=" mx-1 mx-sm-5 mb-5 pb-5">



        <div class="container">



          <div class="row d-flex justify-content-lg-start choose-topic ">


            <!--  For Case Studies-->


            <div class="mx-lg-5 mx-auto">
              <div class="card card-topic" style="width: 17rem;">

                <a href="/choose_topic.php?group_id=1044&amp;redo"><img class="card-img-top img" style="max-height:12rem;" src="https://images-dev.dlf.org.uk/sara4/dynamic/topic_images/494.jpg" alt=""></a>
                <div class="card-body row">
                  <h2 class="card-title col-10">Using the toilet                                             </h2>
                  <div class="col-2 text-dark mt-2">
                    <i class="my-auto fa fa-info-circle text-blue-dark text-left" style="font-size:1.8rem; " data-toggle="tooltip" data-placement="top" title="Advice and product suggestions related to the use of a toilet.  This section is split into three sections on getting on and off the toilet, getting to the toilet and using the toilet."></i>
                    <input  type="hidden" name="description" value="Advice and product suggestions related to the use of a toilet.  This section is split into three sections on getting on and off the toilet, getting to the toilet and using the toilet.">
                    <span class="sr-only">Advice and product suggestions related to the use of a toilet.  This section is split into three sections on getting on and off the toilet, getting to the toilet and using the toilet.</span>
                  </div>


                </div>
                <div class="card-footer d-flex justify-content-center">
                  <a href="/questionnaire/121" class="btn  btn-info blue " title="Go To questionnaire">Start Questionnaire</a>
                </div>
              </div>
            </div>


            <!--  For Case Studies-->


            <div class="mx-lg-5 mx-auto">
              <div class="card card-topic" style="width: 17rem;">

                <a href="/choose_topic.php?group_id=1004&amp;redo"><img class="card-img-top img" style="max-height:12rem;" src="https://images.dlf.org.uk/sara4/dynamic/topic_images/413.jpg" alt=""></a>
                <div class="card-body row">
                  <h2 class="card-title col-10">Bathing & personal care                                             </h2>
                  <div class="col-2 text-dark mt-2">
                    <i class="my-auto fa fa-info-circle text-blue-dark text-left" style="font-size:1.8rem; " data-toggle="tooltip" data-placement="top" title="Includes advice and equipment ideas to help with bathing, showering and hair care."></i>
                    <input  type="hidden" name="description" value="Includes advice and equipment ideas to help with bathing, showering and hair care.">
                    <span class="sr-only">Includes advice and equipment ideas to help with bathing, showering and hair care.</span>
                  </div>


                </div>
                <div class="card-footer d-flex justify-content-center">
                  <a href="/questionnaire/121" class="btn  btn-info blue " title="Go To questionnaire">Start Questionnaire</a>

                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>





  </div>
</div>



@endsection
