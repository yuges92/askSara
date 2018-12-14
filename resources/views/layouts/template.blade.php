<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'AskSARA') }}</title>


  <!-- Fonts -->
  <link rel="dns-prefetch" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @stack('css')
</head>
<body>

  <main class="main-body">
    <a id="skip" href="#mainContent" class=" sr-only sr-only-focusable">Skip to Main Content</a>

    <nav class="navbar navbar-color-on-scroll   navbar-expand-lg"  id="sectionsNav" >
      <div class="container-fluid">
        <div class="navbar-translate">
          <a class="navbar-brand logo" href="/"><img src="https://asksara-dev.dlf.org.uk/assets-2/images/asksara.png" alt="DLF AskSARA logo"/></a>
        </div>
        <div class="pull-right" >
          <a href="https://www.justgiving.com/dlf/donate" class="as-donate btn hidden-sm hidden-md as-donate">  Donate </a>
          <!--        <a data-toggle="modal" href="#myModal" class="btn btn-primary"> <i class="fa fa-file-text-o"></i>  1 </a>-->
          <a class="report-link" data-toggle="modal" href="#myModal" >  <span class="fa-stack fa-2x has-badge" data-count=" 1">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-file-text-o fa-stack-1x fa-inverse"></i>
          </span>
        </a>
      </div>
    </div>
    </nav>

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
                  <li> <a href="report.php?topic_id=84">
                    Smell                        </a>
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
    </div>
    <div id="app">

      @yield('body')
    </div>
  </main>




  <footer id="mainFooter">
    <div class="footer-left">
      <a class="vertical-logo-container" href="/">
        <img class="vertical-logo" src="/images/dlfshawtrust.jpg">
      </a>
    </div>
    <div class="footer-right">
      <ul class="social-nav">
        <li>Follow Us</li>
        <li class="icon-bubble"><a href="https://www.facebook.com/dlfuk" target="_blank"><i class="fa fa-facebook"></i><span class="hidden"> Facebook</span></a></li>
        <li class="icon-bubble"><a href="https://twitter.com/dlfuk" target="_blank"><i class="fa fa-twitter"></i><span class="hidden">Twitter</span></a></li>
        <li class="icon-bubble"><a href="#" target="_blank"><i class="fa fa-linkedin"></i><span class="hidden">LinkedIn</span></a></li>
      </ul>
      <ul class="legal-nav">
        <li><a href="/page.php?pId=1">About AskSARA</a> </li>
        <li><a href="/page.php?pId=2">License AskSARA</a> </li>
        <li><a href="http://www.dlf.org.uk/content/contact-us">Contact us</a> </li>
        <li><a class="case-studies" href="/choose_topic.php?group_id=1034">Case studies</a>
          <li><a href='/sitemap.php'>Sitemap</a></li>
          <li><a href="/info.php?csid=446">User policy</a></li>
          <li><a href="/info.php?csid=434">Cookie policy</a></li>
          <li>© 2018 AskSARA</li>
        </ul>
      </div>
    </footer>
{{--
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <script type="text/javascript">
  axios({
  method:'get',
  mode: 'no-cors',
  withCredentials: true,
  headers: {
    'Access-Control-Allow-Origin': '*',
    'Content-Type': 'application/json',
  },
  url:'https://apidev-asksara.dlf.org.uk/authority',
})
  .then(function (response) {
    console.log(response);
  });
console.log('Hello World');
  </script> --}}


  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  @stack('js')
</body>
</html>
