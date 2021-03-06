<head>
<script type="text/javascript" src="/js/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="/css/main.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">




</head>


<section class="main-header" id="main-header">
  <div class="logo-header">

    <a href="/"><img src="/img/logo/logo2.svg" alt="logo Celestia" ></a>

  </div>

  <nav>

      <a class="positn" href='/'><div class="page-header home">

        <h1>ACCUEIL</h1>

      <span></span></div></a>

      <a href='/game'><div class="page-header  game">

        <h1>JOUER</h1>
      </div></a>

      <a href='/creer'><div class="page-header make">

        <h1>CREER</h1>
      </div></a>

      <a href='/calendrier'><div class="page-header calendrier">

        <h1>CALENDRIER</h1>
      </div></a>

      <a href='/contact'><div class="page-header contact">

        <h1>CONTACT</h1>
      </div></a>

  </nav>
  @guest
      @if (Route::has('login'))

          <a href="{{ route('login') }}"><div class="profil-header">
            <img src="../img/logo-celestia.png" alt="logo Celestia" width="100" height="100">
            <h2>Connexion</h2>

          </div></a>
      @endif

      @if (Route::has('register'))
          <!--<li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>-->

      @endif
  @else
        <div class="logout_header">


          <a class="btn_profil" href="/profil/{{Auth::id()}}"><div class="profil-header">
            <img src="{{ Auth::user()->avatar }}" alt="avatar" width="100" height="100">
            <h2>{{ Auth::user()->prenom }}</h2>


          </div></a>
          <a class="btn-log btn btn_diy" href="{{ route('logout') }}"
             onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
              {{ __('Deconnexion') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
          </form>
      </div>

  @endguest

</section>






          @yield('content')

        </main>

<section class="footer">
  <h1>&copy; Tout droits r??serv?? au groupe Celestia</h1>
  <div class="reseaux sociaux">
    <h1>Nos r??seaux</h1>
    <div class="link_res">


      <a href="https://www.instagram.com/celestia_lejeu/?hl=fr"><img src="/img/r??seaux/insta.png" alt="instagram"> </a>
      <a href="https://www.facebook.com/Celestia-106968368153509"> <img src="/img/r??seaux/fb.png" alt="facebook"> </a>
    </div>
  </div>
  <div class="net-link">
    <h1>Navigation</h1>
    <a href="/">Accueil</a>
    <a href="/game">Le Jeu</a>
    <a href="/creer">DIY</a>
    <a href="/calendrier">Calendrier</a>
    <a href="/contact">Contact</a>

  </div>
  <div class="ressource">
    <h1>Illustrations</h1>
    <a href="https://fr.freepik.com/">Freepik</a>
  </div>
</section>



<script src="/js/divers.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
