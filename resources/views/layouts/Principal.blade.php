<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>{{ config('app.name', 'GaneshaSIGE') }}</title>

    <!--Styles-->
    <link href="{{ url('/css/estilos.css') }}" rel="stylesheet">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ url('/css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ url('/css/_all-skins.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('/css/font-awesome/css/font-awesome.min.css') }}">

  <link rel="stylesheet" href="{{ url('/css/select2.css') }}">
  <style media="print" type="text/css">
@media print
{
body * { visibility: hidden; }
#Imprimir { visibility: hidden; }
#PrintDiv * { visibility: visible; }
#PrintDiv { position: fixed; top: 2px; left: 1px; padding-right: 50px;}
}

</style>

  @yield('customcss')

</head>
<body>

    <div class="wrapper ">
      <header class='main-header'>
        <nav class="navbar-header navbar-static-top">

            <a class="navbar-brand">
              <img class='logo2 img-responsive' alt="Responsive image" src='{{ url('/img/ganesha.png') }}' style="max-width: 50px; max-height: 50px;">
            </a>
            <a href="/" class="navbar-brand">
              <font color="white">
                <h4>
                  Sistema de Informacion Para la Gestion de Evaluaciones GANESHA |SIGE|
                </h4>
              </font>
            </a>

            <a class="navbar-brand">
<img class='logotype img-responsive' src='{{ url('/img/logo.png') }}' alt="Responsive image" style="max-width: 50px; max-height: 50px;">
            </a>
            <a class="navbar-brand">
              <font color="white">
                <h4>
                  UPTAEB
                </h4>
              </font>
            </a>
                      <div class="col-md-2"></div>

            <div class="navbar-custom-menu">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                  <a href="{{ url('#') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <font color="white">Ayuda<span class="caret"></span></font>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a target="_blank" href="{{ url('/docs/Manual de Usuario.pdf') }}">Manual de usuario</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="{{ url('#') }}">About</a></li>
                  </ul>
                </li>
              </ul>
            </div>
        </nav>
      </header>

    <div class="content-wrapper ">

      <Br><Br><Br>
      @yield('content')
      {{-- Contenido dentro del body --}}
    </div>
  </div>
  <!-- Scripts -->
  <script src="{{ url('/js/jquery.js') }}"></script>
  <script src="{{ url('/js/bootstrap.js') }}"></script>
  <script src="{{ url('/js/functions.js') }}"></script>
  <script>
  $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();
  });
  </script>
@yield('customjs')

</body>
</html>
