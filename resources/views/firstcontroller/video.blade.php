@extends('templates.template')

@section('content')
<section class="page-vidéo">

  <h1 class="Titre">{{$video->name}}</h1>
  <object class="Video-game" data="{{$video->urlVideo}}"></object>


@if(Auth::check())
  @if(Auth::user()->step_vid == $video->id)
  <a href="/game">J'ai compris, je continue l'aventure !</a>

  @else
  <a href="/next-step">J'ai compris, je continue l'aventure !</a>
  @endif

@else

  <a href="/game">J'ai compris, je continue l'aventure !</a>

@endif

</section>
@endsection
