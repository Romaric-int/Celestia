@extends('templates.template')

@section('content')
<section class="page-video">

  <h1 class="titre-video">{{$video->name}}</h1>
  <p>Préchauffez le four à 200°C (Th 6-7). Décongelez les épinards, à feu doux, dans une casserole, puis enlevez l’eau résiduelle (n’hésitez pas à appuyer pour la faire sortir!). Hachez-les grossièrement (je le fais au ciseau).</p>
  <object width="1100" height="650" data="{{$video->urlVideo}}"></object>


@if(Auth::check())
  @if(Auth::user()->step_vid == $video->id)
  <a class="btn btn_diy" href="/game">J'ai compris, je continue l'aventure !</a>

  @else
  <a class="btn btn_diy" href="/next-step">J'ai compris, je continue l'aventure !</a>
  @endif

@else

  <a class="btn btn_diy" href="/game">J'ai compris, je continue l'aventure !</a>

@endif

</section>
@endsection

<style media="screen">
  body {
    background-image: url('/img/video/fond_video.svg');
    color: white;
  }

  .btn_diy{

    margin-bottom: 4rem;
  }
  
</style>
