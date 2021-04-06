@extends('templates.template')


@section('content')

<?php $vid = Auth::user()->step_vid/5*100;  ?>
<div class="stat_profil">


  <img width="25%"src="{{Auth::user()->avatar}}" alt="avatar">

  <div class="info_profil">


    <h1 class="nom_profil">{{ Auth::user()->name}} <br> {{Auth::user()->prenom }}</h1>
    <p class='date_creat'>Petit astronaute depuis: {{$date}} jours</p>
  </div>

<div class="les_stats">


  <div class="stat aventure">
    <h1 class="num_profil"><span>{{$vid}}%</span></h1>
    <h1>Aventure</h1>
  </div>

  <div class="stat planete_visit">
     <h1 class="num_profil"><span>{{Auth::user()->step_story}}</span></h1>
     <h1>Planétes <br>visités</h1>
  </div>

  <div class="stat quizz_effec">
    <h1 class="num_profil"><span>{{Auth::user()->step_vid}}</span></h1>
    <h1>Quizz <br>effectués</h1>

  </div>

</div>




</div>
<img class="illu_stat" src="/img/profil/fond_stat.svg" alt="">
@endsection


<style media="screen">
  body {
    background-color: #303156;
  }
  .footer {
    display: none !important;
  }
</style>
