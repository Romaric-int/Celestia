@extends('templates.template')

@section('content')

  <div class="flex-planet">

@if(Auth::check())



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
@for ($i = 1; $i < count($planete); $i++)
  @if(Auth::user()->step_story == $i && Auth::user()->step_vid != $i)
    <div class="quizz quizz{{$i}}">
      <a class="btn btn_diy btn_quizz" href="/nextStory">Je continue l'aventure</a>
    </div>

    <style> .storyText {
      display: none;
      }
      .planete{
        filter: blur(0.5rem);
      }



    </style>
  @endif
@endfor


<!-- -->

@foreach ($planete as $p)

@if(Auth::user()->step_vid == $p->id)
  <p class="storyText">{{$p->storyText}}</p>
@elseif(Auth::user()->step_vid == 0)
  <p class="storyText"> Intro </p>
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
</style>

<script type="text/javascript">
  addEventListener("load", function(){
  document.body.addEventListener("wheel", function(e){
  e.preventDefault();
  document.body.scrollLeft+=e.deltaY<0 ? -400 : 400
  }, false);}, false);
</script>
