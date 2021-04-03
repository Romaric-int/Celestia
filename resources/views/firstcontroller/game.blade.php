@extends('templates.template')

@section('content')

  <div class="flex-planet">

@if(Auth::check())

@foreach($planete as $p)
    <div class="planete planete{{$p->id}}">
      <a href="/game/{{$p->id}}"><img src="{{$p->planete}}" alt="planete{{$p->id}}"></a>
      <img class="num-planete" src="{{$p->numImg}}" alt="numero{{$p->id}}">
      <div class="story-text story-text{{$p->id}}">
        <p class="text-laika text-laika{{$p->id}}">{{$p->storyText}}</p>
      </div>
    </div>
@endforeach

<?php
$tab = [2,3,4,5,6];

for ($i=0; $i < 5; $i++) {
  if (Auth::user()->step_vid == $i) {
    for ($j=Auth::user()->step_vid; $j < count($tab); $j++) {
      echo "<style media='screen'>
        .planete".$tab[$j]."{
        filter: blur(4px);
        cursor: default;
        pointer-events: none;
      }</style>";
    };
    echo "<style  media='screen'>
    .text-laika".$i."{
      visibility: visible;
    }";


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
@endif


  <img src="/img/game/trait.svg" alt="">




  </div>


@endsection

<style media="screen">
  .game {
    background-color: #F28DD1 !important;
  }
  body {
    background-image: url('/img/game/fond_game.svg');
    background-position: left;
    background-repeat: repeat;
    background-size: cover;
    overflow: hidden;


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
</style>

<script type="text/javascript">
  addEventListener("load", function(){
  document.body.addEventListener("wheel", function(e){
  e.preventDefault();
  document.body.scrollLeft+=e.deltaY<0 ? -600 : 600
  }, false);}, false);
</script>
