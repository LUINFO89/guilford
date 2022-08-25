<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Software Lyvos Colombia
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
 
  <!-- CSS Files -->
  <link href="{{ asset('./assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('./assets/css/paper-dashboard.css?v=2.0.1')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">


</head>

<body >
  <div class="wrapper">
    <div class="sidebar" >
      <div class="logo">
         
        </a>
        <a href="https://luiguie.jimdofree.com/" class="simple-text logo-normal" style="font-size: 11px">
          Colegio Psicopedagógico Guilford
           <div class="logo-image" style="margin-left: 30%">
            <img src="https://image.jimcdn.com/app/cms/image/transf/dimension=320x10000:format=png/path/s8b6a8e799386383b/image/i158ea38c76baa615/version/1612487596/image.png" style="width: 50%">
          </div> 
        </a>
      </div>
      <div class="sidebar-wrapper" >
        <ul class="nav">
          <li class="">
            <a href="{{ route('home') }}"  >
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="">
            <a href="{{ route('grados.index') }}" >
              <i class="nc-icon nc-badge"></i>
              <p>Grados</p>
            </a>
          </li>
          <li class=" ">
            <a href="{{ route('alumnos.index') }}" >
              <i class="nc-icon nc-circle-10"></i>
              <p>Alumnos</p>
            </a>
          </li>
          <li class=" ">
            <a href="{{ route('profesores.index') }}" >
              <i class="nc-icon nc-hat-3"></i>
              <p>Profesores</p>
            </a>
          </li>
          <li class=" ">
            <a href="{{ route('asignaturas.index') }}" >
              <i class="nc-icon nc-app"></i>
              <p>Asignaturas</p>
            </a>
          </li>
          <li class=" ">
            <a href="{{ route('notas.index') }}" >
              <i class="nc-icon nc-book-bookmark"></i>
              <p>Notas</p>
            </a>
          </li>
          
          <li class=" ">
            <a href="{{ route('solicitudes.index') }}" >
              <i class="nc-icon nc-bullet-list-67"></i>
              <p>Solicitudes</p>
            </a>
          </li>
          <li class=" ">
            <a href="{{ route('certificaciones.index') }}" >
              <i class="nc-icon nc-money-coins"></i>
              <p>Certificaciones</p>
            </a>
          </li>
          <li class=" ">
            <a href="{{ route('informes.index') }}" >
              <i class="nc-icon nc-paper"></i>
              <p>Imprimir estadisticos</p>
            </a>
          </li>

          <li class=" ">
            <a href="{{ route('NewPassword') }}" >
              <i class="nc-icon nc-settings"></i>
              <p>Perfil</p>
            </a>
          </li>
          <li class=" ">
            <a href="{{ route('usuarios.index') }}" >
              <i class="nc-icon nc-satisfied"></i>
              <p>Usuarios</p>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh; " style="background-color: #007965">
      <!-- Navbar -->
     
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent" >
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            
            <a id="navbar" class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false" v-pre>
            Nombre: {{ Auth::user()->name }}<br>
            Email: {{ Auth::user()->email}} 
            

            

          </a>
            
          </div>

          <div class="collapse navbar-collapse justify-content-end" id="navigation">

            @guest
            @if (Route::has('login'))
            <a class="nav-link" href="{{ route('login') }}">{{ __(' ') }}</a>


            @endif

            @if (Route::has('register'))
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>

            @endif
            @else
           

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <a class="nav-link dropdown-toggle"" href=" {{ route('logout') }}" onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>

            @endguest

            @auth
              
            
            <ul class="navbar-nav">

              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="{{ route('home') }}" id="navbarDropdownMenuLink"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-user"> </i>
                  {{ Auth::user()->name }}


                </a>

                <form action="" method="post">

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                  </div>
                </form>
               
              </li>


            </ul>
            @endauth

          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-auto" style="margin-top: 12% ; ">
        

        @yield('content')
        <footer class="footer" >
          <div class="container-fluid">
            <div class="row m-2">

              <div class="credits ml-auto ">
                <span class="copyright" style="color: rgb(24, 134, 230)">
                  © 2022, made by Developer: Luis Hernando Soto Mesa
                </span>
              </div>
            </div>
          </div>
        </footer>
      </div>




    </div>
    
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>

</html>