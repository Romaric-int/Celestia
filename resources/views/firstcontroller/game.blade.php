@extends('templates.template')

@section('content')

  <div class="flex-planet">

@if(Auth::check())

  <div class="diego_help">
    <img src="/img/game/diego_help.svg" alt="diego">
    <h1>A l’aide!!!</h1>
  </div>

@for ($i=1; $i < count($planete); $i++)






    <div class="quizz"  id="quiz{{$i}}">
      <img class="croix" src="/img/game/croix.png" alt="croix">
      <h1>Quizz </h1>
      <h2><img src="/img/laika/tete_contente.png" width="70px" alt=""><span id="question{{$i}}" ></span></h2>
      <h3 id="score"></h3>
      <a href="/game/1" id="revoir_video">Revoir la vidéo</a>

      <div class="choices">
        @for ($w = 0; $w < 4; $w++)
        <button  class="btn_choice guess{{$w}}">
          <p  class="choice{{$w}}"></p>
        </button>
        @endfor

      </div>


    </div>



  @if(Auth::user()->step_story == $i && Auth::user()->step_vid != $i)

    <a href="/game" class="re-quizz">Faire le quizz</a>

    <style media="screen">
      #quiz{{$i}} {
        visibility: visible;
      }

      .storyText{
        visibility: hidden;
      }
    </style>

  @endif
@endfor
  <script src="/js/quiz.js"></script>


@foreach($planete as $p)
    <div class="planete planete{{$p->id}}">
      <a href="/game/{{$p->id}}"><img src="{{$p->planete}}" class="img-planete img-planete{{$p->id}}"alt="planete{{$p->id}}"></a>
      <img class="num-planete num-planete{{$p->id}}" src="{{$p->numImg}}" alt="numero{{$p->id}}">
      <div class="story-text story-text{{$p->id}}">
        <p class="text-laika text-laika{{$p->id}}"></p>
      </div>
    </div>


@endforeach

<!--quizz -->



<!-- -->

@foreach ($planete as $p)

@if(Auth::user()->step_vid == $p->id)
  <div class="storyText"> <img src="/img/laika/tete_contente.png" width='50%'alt=""> <p>{{$p->storyText}}</p></div>
@elseif(Auth::user()->step_vid == 0)
  <div class="storyText"><img src="/img/laika/tete_contente.png" width='50%'alt="">
    <p>Laïka a besoin de toi pour retrouver son ami perdu autour de Saturne, Diego,
     il a percuté un champ d’astéroïdes et les commandes de son vaisseau ne répondent plus.
     <br> 3, 2, 1, DÉCOLLAGE ! </p></div>
@endif

@endforeach

<?php


$tab = [2,3,4,5,6];

for ($i=0; $i < 5; $i++) {
  if (Auth::user()->step_vid == $i){
    for ($j=Auth::user()->step_vid; $j < count($tab); $j++){
      echo "<style media='screen'>
        .planete".$tab[$j]."{
        filter: blur(4px);
        cursor: default;
        pointer-events: none;

      }</style>";
    };

    $e = $i+1;
    echo "<style  media='screen'>
    .text-laika".$e."{
      visibility: visible;

    }</style>
    ";
    $step = Auth::user()->step_vid;

    for ($i=1; $i < $step+2; $i++) {
    echo "<style  media='screen'>
    .num-planete".$i." {

    filter: grayscale(0%);
  }
  .img-planete".$i."{
    filter: grayscale(0%);
  }</style>";
  };




  };
};




 ?>

@else


@foreach($planete as $p)
    <div class="planete planete{{$p->id}}">
      <a href="/game/{{$p->id}}"><img src="{{$p->planete}}" alt="planete{{$p->id}}"></a>
      <img class="num-planete" src="{{$p->numImg}}" alt="numero{{$p->id}}">
      <div class="story-text{{$p->id}}">

      </div>
    </div>
@endforeach

  <p class="storyText">Connectez-vous profiter du mode histoire !</p>

  <style media="screen">
  .num-planete{
    filter: grayscale(0%);
  }

  .planete6 {
    display: none;
  }
  </style>
@endif

  </div>




@endsection

<style media="screen">
  .game {
    background-color: #F28DD1 !important;
  }
  body {
    background-image: url('/img/game/fond_game.svg');
    background-position: left;
    background-repeat: no-repeat;
    background-size: cover;
    overflow-y: hidden;
    height: 100vh;

  }

  .page-game {
    width: 4000px;
    height: 10%;


  }
  .main-header {
    position: fixed !important;
  }

  .logo-header {
    margin-right: 200px;
    margin-left: 100px;
  }

  .footer{
    display: none !important;
  }

  .main-header {
    width: 0 !important;
  }

  @media screen and (max-width: 1600px){
  .main-header > nav {
      left: 0;
      margin-right: 3rem;
  }

  .logo-header {
    margin-right: 6rem;
    margin-left: 2rem;
}
}

</style>



<script type="text/javascript">
  addEventListener("load", function(){
  document.body.addEventListener("wheel", function(e){
  e.preventDefault();
  document.body.scrollLeft+=e.deltaY<0 ? -400 : 400
  }, false);}, false);
</script>
