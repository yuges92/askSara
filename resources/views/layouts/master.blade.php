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
    <div id="app">

      @yield('body')
    </div>
  </main>
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
