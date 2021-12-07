<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>@yield('title','Laravel 2242755')</title>

    @yield('css')

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

   

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">

   
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header id ="head" class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow" >
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
 
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
  <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="{{ route('logout') }}"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
          {{ __('Cerrar sesion') }}
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
      </form>
    </div>
  </div>
</header>

<div class="container-fluid" >
  <div class="row" >
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3" id="sidebar">
        <ul class="nav flex-column" >

        @if( Auth::user()->rol == '1')
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <span data-feather="home"></span>
                  Inicio administrador
                </a>
              </li>
              <li class="nav-item">
            <a class="nav-link" href="programas">
              <span data-feather="file"></span>
              Programa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fichas">
              <span data-feather="file"></span>
              Fichas
            </a>
          </li>
                
          <li class="nav-item">
            <a class="nav-link" href="aprendizs">
              <span data-feather="shopping-cart"></span>
              Aprendiz
            </a>
          </li>     

        @endif
        @if( Auth::user()->rol == '2')
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <span data-feather="home"></span>
                  Inicio Aprendiz
                </a>
              </li>
            <li class="nav-item">
            <a class="nav-link" href="tipo_novedads">
              <span data-feather="file"></span>
              Novedades
            </a>
           </li> 
        @endif
        @if( Auth::user()->rol == '3')
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <span data-feather="home"></span>
                  Inicio Apoyo Administrativo
                </a>
              </li>     
              <li class="nav-item">
            <a class="nav-link" href="programas">
              <span data-feather="file"></span>
              Programa
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="fichas">
              <span data-feather="file"></span>
              Fichas
            </a>
          </li>
                
          <li class="nav-item">
            <a class="nav-link" href="aprendizs">
              <span data-feather="shopping-cart"></span>
              Aprendiz
            </a>
          </li>     
          <li class="nav-item">
            <a class="nav-link" href="novedads">
              <span data-feather="file"></span>
              Novedades admin
            </a>
          </li>  
          <li class="nav-item">
            <a class="nav-link" href="barchart">
              <span data-feather="file"></span>
              Estadisticas Novedades 
            </a>
          </li>    
  
        @endif
         
         
          <li class="nav-item">
            <a class="nav-link" href="tipo_pqrs">
              <span data-feather="file"></span>
              Tipo pqr
            </a>
          </li>      
          
           

          <li class="nav-item">
            <a class="nav-link" href="pqrs">
              <span data-feather="shopping-cart"></span>
              PQR
            </a>
          </li>       

           
        </ul>
    </div>
    </nav>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

    <div class="container">
        <h1>@yield('encabezado')</h1>
         @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>


      @yield('script')


      @yield('js')

</body>
</html>



<style>



#sidebar{
  background: #FF4B2B;
  height:100%;
  width:108%;
 
}

#sidebarMenu li {
    width: 100%;
    margin-bottom: 1.7rem;
    padding-left: 0.3rem;
}

#sidebarMenu a {
    padding-left: 1rem;
    display: block;
    color: #fff;
    font-size: 1.1rem;
}

#sidebarMenu a:hover {
    background: #fff;
    padding-top: 1rem;
    padding-bottom: 1rem;
    color: #FF4B2B;
    border-radius: 30px 0px 0px 30px;
}

#sidebarMenu a span:first-child {
    font-size: 0.2rem;
    padding-right: 1rem;
}
</style>