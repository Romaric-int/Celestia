@extends('templates.template')


@section('content')

<div class="intro_calender">
  <div class="txt_calender">
    <h1>Calendrier</h1>
    <p>Une version simplifiée du calendrier arrive prochainement sur cette page !</br></br>

      En attendant, si tu souhaites savoir quand observer le ciel tu peux te rendre sur cette page:</p>
    <a href="https://www.astrofiles.net/calendrier/2021">Découvrir le calendrier</a>
  </div>

  <div class="illu">
    <img src="/img/illustration/Calender.png" alt="calendrier image">
  </div>

</div>

<section class="footer_d_game">

  <div class="i-menu menu1 menu_diy">
    <div class="txt-menu txt-menu1">
      <h1>Un jeu pour apprendre !</h1>
      <p>Tu peux choisir de débuter l’excursion directement en cliquant sur le bouton jouer, afin de venir au secours de LAIKA et d’en apprendre plus sur l’espace …</p>
      <a id="btn-jouer-i"class="btn-w" href="game">JOUER</a>

    </div>
      <img data-aos="fade-left" data-aos-duration="1000"data-aos-delay="300"  data-aos-offset="0" src="/img/illustration/game.png" alt="">
  </div>

@endsection


<style media="screen">
  body {
    background-color: #303156;
  }

  .i-menu h1 {
    color: white !important;

  }

  .i-menu p {
    color: white !important;

  }

</style>
