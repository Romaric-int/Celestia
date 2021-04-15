@extends('templates.template')

@section('content')
<section class="page-video">

  <h1 class="titre-video">{{$video->name}}</h1>
  <p>{{$video->descri}}</p>
  <object class="video-page{{$video->id}}" width="1100" height="650" data="{{$video->urlVideo}}"></object>


@if(Auth::check())

  @if(Auth::user()->step_story >= 3)
  <a class="btn btn_diy" href="/game">J'ai compris, je continue l'aventure !</a>
  <style media="screen">
    .video-page4 {
      display: none !important;
    }
    .page-video a {

    margin-bottom: 12rem !important;
}
  </style>
  @elseif(Auth::user()->step_story >= $video->id)
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
