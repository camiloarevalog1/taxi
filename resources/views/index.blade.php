<!DOCTYPE HTML>
<!--
  Big Picture by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="{{ app()->getLocale() }}">
  <head>
    <title>YourTaxi</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    
   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
    
    
       <style>
        @import url('https://fonts.googleapis.com/css?family=Grand+Hotel');
        </style>
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
  </head>
  <body>

    <!-- Header -->
      <header id="header">
        <h2 class="titulo">Your Taxi</h2>
        <nav>
          <ul>
          
            <li><a href="#intro">Home</a></li>
            <li><a href="#one">Servicios</a></li>
            <li><a href="#two">Uso</a></li>
            <li><a href="#work">Nosotros</a></li>
            <li><a href="#contact">Contactanos</a></li>
            
              <!-- Right Side Of Navbar -->
                   
                        <!-- Authentication Links -->
                        @guest
                           <li><a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a></li>
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a></li>
                            
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    
          </ul>
        </nav>
      </header>

    <!-- Intro -->
      <section id="intro" class="main style1 dark fullscreen">
        <div class="content">
          <header>
            <h2 class="text-one">EL MEJOR SERVICIO AL ALCANCE DE TUS DEDOS.</h2>
          </header>
          <p class="texone">La solución ideal para que sólo tengas que preocuparte de tu trabajo. Podrás solicitar y reservar taxis de forma instantánea a través de tu smartphone.<strong> Clientes y Empresas</strong>  de Colombia son las beneficiadas.</p>
          <footer>
            <a href="#one" class="button style2 down">More</a>
          </footer>
        </div>
      </section>

    <!-- One -->
      <section id="one" class="main style2 right dark fullscreen">
        <div class="content box style2">
          <header>
            <h2>Que ofrecemos...</h2>
          </header>
          <p>Una herramienta que permite trabajar cómodamente la solicitud de taxis  desde la recepción de tu empresa para tus empleados y clientes, desde la web. </p>
        </div>
        <a href="#two" class="button style2 down anchored">Next</a>
      </section>

    <!-- Two -->
      <section id="two" class="main style2 left dark fullscreen">
        <div class="content box style2">
          <header>
            <h2>Uso</h2>
          </header>
          <p>Registrate e ingresa, solicita tu taxi en cualquier momento del dia, seleccionando tu destino.</p>
        </div>
        <a href="#work" class="button style2 down anchored">Next</a>
      </section>

    <!-- Work -->
      <section id="work" class="main style3 primary">
        <div class="content">
          <header>
            <h2>Nosotros</h2>
            <p>Nosotros nos encargamos de tus desplazamientos en el pais, y generamos un reporte de tus gastos mensuales.</p>
          </header>

          <!-- Gallery  -->
            <div class="gallery">
              <article class="from-left">
                <a href="{{asset('images/fulls/01.png')}}" class="image fit"><img src="images/thumbs/01.png" title="The Anonymous Red" alt="" /></a>
              </article>
              <article class="from-right">
                <a href="{{asset('images/fulls/02.jpg')}}" class="image fit"><img src="{{asset('images/thumbs/02.jpg')}}" title="Airchitecture II" alt="" /></a>
              </article>
              <article class="from-left">
                <a href="{{asset('images/fulls/03.jpg')}}" class="image fit"><img src="{{asset('images/thumbs/03.jpg')}}" title="Air Lounge" alt="" /></a>
              </article>
              <article class="from-right">
                <a href="{{asset('images/fulls/04.jpg')}}" class="image fit"><img src="{{asset('images/thumbs/04.jpg')}}" title="Carry on" alt="" /></a>
              </article>
              <article class="from-left">
                <a href="{{asset('images/fulls/05.jpg')}}" class="image fit"><img src="{{asset('images/thumbs/05.jpg')}}" title="The sparkling shell" alt="" /></a>
              </article>
              <article class="from-right">
                <a href="{{asset('images/fulls/06.jpg')}}" class="image fit"><img src="{{asset('images/thumbs/06.jpg')}}" title="Bent IX" alt="" /></a>
              </article>
            </div>

        </div>
      </section>

    <!-- Contact -->
      <section id="contact" class="main style3 secondary">
        <div class="content">
          <header>
            <h2>Contactanos</h2>
            <p></p>
          </header>
          <div class="box">
            <form method="post" action="#">
              <div class="field half first"><input type="text" name="name" placeholder="Name" /></div>
              <div class="field half"><input type="email" name="email" placeholder="Email" /></div>
              <div class="field"><textarea name="message" placeholder="Message" rows="6"></textarea></div>
              <ul class="actions">
                <li><input type="submit" value="Send Message" /></li>
              </ul>
            </form>
          </div>
        </div>
      </section>

    <!-- Footer -->
      <footer id="footer">

        <!-- Icons -->
          <ul class="actions">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
            <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
            <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
          </ul>

        <!-- Menu -->
          <ul class="menu">
            <li>&copy; Untitled</li><li>Design: <a href="https://ufps.edu.co">UFPS</a></li>
          </ul>

      </footer>

    <!-- Scripts -->
      <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/jquery.poptrox.min.js')}}"></script>
      <script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
      <script src="{{asset('js/jquery.scrollex.min.js')}}"></script>
      <script src="{{asset('js/skel.min.js')}}"></script>
      <script src="{{asset('js/util.js')}}"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="{{asset('js/main.js')}}"></script>

  </body>
</html>