<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">Agence évènementiel<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/')}}">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
          <li class="dropdown"><a href="#services"><span>Evènements</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Conférences</a></li>
              <li><a href="#">Mariages et Baptêmes</a></li>
              <li><a href="#">Séminaires</a></li>
              <li><a href="#">Festivals</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto " href="#portfolio">Galéries</a></li>
          <li><a class="nav-link scrollto" href="#team">Equipe</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href="{{ route('login') }}">Se connecter</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#about" class="get-started-btn scrollto">Dévis</a>
    </div>
  </header><!-- End Header -->
