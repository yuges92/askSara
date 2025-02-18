@extends('layouts.template')

@section('body')

  {{-- <home></home> --}}


  <!--   <div class="container mt-0 breadcrumb-div" >
</div>-->
<!--  <div class="">

<button  id="myBtn"  class="btn scrollupbtn text-center "><i class="fa fa-chevron-circle-up  " style="font-size:30px"><span class="sr-only">Go to top</span></i></button>
</div>-->




<!-- ==============================================
BANNER
=============================================== -->
<header id="banner">
  <div class="container-fluid">
    <div class="row">
      <!-- /// Left Column /// -->
      <div class="col-lg-6 featured-banner">
        <!-- // Banners Caption -->
        <div class="caption">
          <!--<h5 class="sans-serif"></h5>-->
          <h1>Looking for equipment to live independently?</h1>
          <p class="sub"> Let AskSARA guide you to products to make daily living easier.</p>
          <a href="#as-group" class="btn btn-primary page-scroll">Start now</a>
        </div>
      </div>
      <!-- /// Right Column (Banners IMG) /// -->
      <div class="col-lg-6 banners-img"></div>
    </div>
  </div>
</header>
<!-- ==============================================
topic
=============================================== -->
<section id="as-group">
  <div class="col-10 p-5 mx-auto">
    <!-- Title -->
    <h2>Expert, personalised advice and information at your fingertips</h2>
    <div class="row">
      @foreach ($mainTopics as $mainTopic)
      <div class="col-sm-6 col-lg-3 group-box wow fadeInRight w-100 mt-4" data-wow-duration=".2s" data-wow-delay=".4s">
        <div class="group-wrapper">
          <div class="group-box-img">
            <a href="/mainTopics/{{$mainTopic->mainTopic_id}}" class="inline-link">
              <img src="{{$mainTopic->filename}}" class="img-fluid" alt="Your health">
            </a>
          </div>
          <div class="top-group p-1">
            <h3>{{$mainTopic->name}}</h3>
            <p>{{$mainTopic->description}}</p>
            <a href="/mainTopics/{{$mainTopic->mainTopic_id}}" class="inline-link">Choose a topic</a>
          </div>
        </div>
      </div>
    @endforeach

    </div>
  </div>
</section>


<!-- ==============================================
Why use AskSARA
=============================================== -->
<section id="services">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 services-caption">
        <h2>Why use AskSARA?</h2>
        <!-- Services Start Here -->
        <div class="services">
          <!-- intro Service -->
          <div class="service wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".8s">
            <!--
            <!-- Services Description Goes Here -->
            <div class="service-content">
              <h5>AskSARA is free and easy to use</h5>
              <p>AskSARA is an award-winning online self-help guide providing expert advice and information on products and equipment for older and disabled adults and children. </p>
            </div>
          </div>
          <!-- First Service -->
          <div class="service wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
            <!-- Services Description Goes Here -->
            <div class="service-content">
              <h5>Receive a Personalised Report</h5>
              <p>Answer some questions about yourself and your environment and you’ll receive a free personalised report, providing clear, tailored advice written by experts on ways to help with your daily activities. </p>
            </div>
          </div>
          <!-- Second Service -->
          <div class="service wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
            <!-- Services Description Goes Here -->
            <div class="service-content">
              <h5>Impartial information and expert advice</h5>
              <p>Advice is written by Occupational Therapists and equipment experts: we do not push products, but offer recommendations based on your answers.</p>
            </div>
          </div>
          <!-- Third Service -->
          <div class="service wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
            <!-- Services Description Goes Here -->
            <div class="service-content">
              <h5>The UK’s only comprehensive and up-to-date database</h5>
              <p>AskSARA links straight through to DLF’s website Living made easy, giving access to over 10,000 daily living products from over 1,000 suppliers, allowing you to decide which supplier to contact. </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 services-bg"></div>
    </div>
  </div>
</section>
<!-- ==============================================
Benefits of using AskSARA
=============================================== -->
<section id="work-process">
  <div class="container-fluid">
    <div class="row">
      <!-- Work Process Left Image -->
      <div class="col-lg-6 process-bg"></div>
      <!-- Work Process Caption -->
      <div class="col-lg-6">
        <!-- Process Holder -->
        <div class="process-wrap">
          <h2>Benefits of using AskSARA</h2>
          <!-- First Process -->
          <div class="process wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".2s">
            <!-- Process Number -->
            <div class="process-num">
              <span class="first">1.</span>
            </div>
            <!-- Process Description -->
            <div class="process-content">
              <h5>Over ninety topics to choose from </h5>
              <p>Explore your options and gain confidence in finding solutions that suit you</p>
            </div>
          </div>
          <!-- Second Process -->
          <div class="process wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".4s">
            <!-- Process Number -->
            <div class="process-num">
              <span>2.</span>
            </div>
            <!-- Process Description -->
            <div class="process-content">
              <h5>Read clear, tailored advice</h5>
              <p>Content is written by DLF’s team of Occupational Therapists and equipment experts</p>
            </div>
          </div>
          <!-- Third Process -->
          <div class="process wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".6s">
            <!-- Process Number -->
            <div class="process-num">
              <span>3.</span>
            </div>
            <!-- Process Description -->
            <div class="process-content">
              <h5>Save and share your report with family, friends and care workers</h5>
              <p>Advice and tips on products, with further help and contacts for more information </p>
            </div>
          </div>
          <!-- Fourth Process -->
          <div class="process wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".8s">
            <!-- Process Number -->
            <div class="process-num">
              <span>4.</span>
            </div>
            <!-- Process Description -->
            <div class="process-content">
              <h5>DLF's advice is trusted by 1 million visitors a year</h5>
              <p>Advice is governed by the NHS's The Information Standard</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ==============================================
advice you can trust
=============================================== -->
<section id="questions">
  <div class="container-fluid">
    <div class="row">
      <!-- Popular Questions -->
      <div class="col-lg-6">
        <div class="accordion" id="accordionExample">
          <!-- Title -->
          <h2>Advice you can trust</h2>
          <!-- First Card -->
          <div class="card wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
            <!-- Card Header -->
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <i class="fa fa-plus"></i>Why should I trust this information?
                </button>
              </h5>
            </div>
            <!-- Card Content -->
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                The information on AskSara is written by healthcare professionals and equipment experts; our advice is not influenced by commercial relationships with suppliers in any way. Our listings of suppliers prioritise those who belong to a Trade Association that operates a transparent, regulated Code of Practice, providing you with protection. DLF is a charity that is governed by the Charity Commission and we work for the benefit of disabled and older people.
              </div>
            </div>
          </div>
          <!-- Second Card -->
          <div class="card wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
            <!-- Card Header -->
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="fa fa-plus"></i>Is the information up to date?
                </button>
              </h5>
            </div>
            <!-- Card Content -->
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                The information and advice contained in the reports is governed by the NHS's The Information Standard, a certification scheme for health and social care information.  Our product listings are regularly checked by a dedicated team who keeps in touch with suppliers, ensuring the information we provide to you is correct. If you find information that is not up to date, please contact data.services@dlf.org.uk
              </div>
            </div>
          </div>
          <!-- Third Card -->
          <div class="card wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".6s">
            <!-- Card Header -->
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i class="fa fa-plus"></i>How can AskSARA help me?
                </button>
              </h5>
            </div>
            <!-- Card Content -->
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                It can be hard to find specialist products and many are wary of being sold items that may not meet their needs or that are over-priced.  AskSARA offers impartial advice written by Occupational Therapists: we do not push products, but offer recommendations based on your needs. Using AskSARA gives you the option to research and compare a range of products and read unbiased, expert advice and information about equipment before contacting suppliers
              </div>
            </div>
          </div>


        </div>
      </div>
      <!-- Popular Questions BG -->
      <div class="col-lg-6 questions-img"></div>
    </div>
  </div>
</section>



<!-- ==============================================
ABOUT US
=============================================== -->
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-offset-2 text-center mx-auto wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".4s">
        <h2>AskSARA covers a wide range of topics </h2>
        <p>AskSARA covers a wide range of topics for adults and children, including products and ideas indepence and well-being, carrying out tasks around the home and getting out and about.</p>
        <p>It also covers obtaining funding and assistance in purchasing equipment and carrying out home adaptations. Advice is available without the need to register or provide any personal details.</p>
        <!-- <a href="#services" class="btn btn-primary page-scroll">Find out more</a>-->
      </div>
    </div>
  </div>
</section>
<!-- ==============================================
FEATURES
=============================================== -->
<section id="features">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-6 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".2s">
        <img src="/images/advice.png" class="img-fluid" alt="svg-icon1">
        <h5>Advice and tips</h5>
        <p>AskSARA will give you heaps of advice and tips for you to share with your family and friends.</p>
        <!--<a href="#" class="inline-link">read more</a>-->
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInLeft" data-wow-duration=".2s" data-wow-delay=".4s">
        <img src="/images/shopping_support.png" class="img-fluid" alt="svg-icon2">
        <h5>Shopping support</h5>
        <p>AskSARA will search the market to find the products that might be right for you.</p>
        <!--<a href="#" class="inline-link">read more</a>-->
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".4s">
        <img src="/images/reports.png" class="img-fluid" alt="svg-icon3">
        <h5>Helping you decide</h5>
        <p>You’ll have access to an impartial list of thousands of products and suppliers: jump in, browse through and select the equipment you want.</p>
        <!--<a href="#" class="inline-link">read more</a>-->
      </div>
      <div class="col-lg-3 col-md-6 wow fadeInRight" data-wow-duration=".2s" data-wow-delay=".2s">
        <img src="/images/confidence.png" class="img-fluid" alt="svg-icon4">
        <h5>Confidence</h5>
        <p>Your personalised report will help you to explore your options and gain confidence in finding solutions that suit you.</p>
        <!--<a href="#" class="inline-link">read more</a>-->
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-offset-2 text-center mx-auto wow fadeInUp" data-wow-duration=".2s" data-wow-delay=".4s">
        <h2>License AskSARA</h2>
        <p class="lead">AskSARA can be licenced by local authorities, companies and charities to meet the needs of their residents, customers and members. It is now used by some of the leading companies in the UK to help guide customers to their own range of products, while also providing them with the expert advice they need. </p>
        <a href="#contact" class="btn btn-white page-scroll">Let's work together</a>
      </div>
    </div>
  </div>
</section>







@endsection


{{-- @push('js')
<script type="text/javascript">
$.get("https://apidev-asksara.dlf.org.uk/authority", function(data, status){
console.log(data);
});
</script>
@endpush --}}
