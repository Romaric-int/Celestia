@extends('templates.template')

@section('content')





    <div class="quizz quizz"  id="quiz">
      <h1>Quizz </h1>
      <h2><img src="/img/laika/tete_contente.png" width="70px" alt=""><span id="question" ></span></h2>
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


    <script src="/js/quiz.js"></script>







@endsection
