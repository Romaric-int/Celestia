@extends('templates.template')

@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>404 Custom Error Page Example</title>


</head>

<body>
    <div class="page-404">
      <img src="/img/404/404.svg" alt="">
      <p>🐶 Woofpsie… Tu t’es perdu dans l’espace…</p>
      <p style="font-family:'Montserrat'; font-size:1.5rem;">La page que tu recherches n’existe pas.</p>
      <div class="lien_404">
        <a class="btn_404 accueil" href="/">Accueil</a>
        <a class="btn_404  prec" href="{{url()->previous()}}">Page précédente</a>
      </div>
      <img class="illu1" src="/img/404/illu1.svg" alt="">
      <img class="illu2" src="/img/404/illu2.svg" alt="">

    </div>
</body>

</html>
@endsection

<style media="screen">

.footer {
  display: none !important;
}
  body {
    background-image: url('/img/video/fond_video.svg');
    overflow: hidden;
  }
  .page-404{
    position: relative;
    display: flex;
    flex-direction: column;

  }
  .page-404 img{
    position: relative;

  }
  .illu1{
    position: absolute !important;
    top: 5%;
    left: -40%;
  }

  .illu2{
    position: absolute !important;
    top: 5%;
    right: -40%;
  }

  .page-404 p{
    font-family: "Fredoka One";
    font-size: 2rem;
    color: #BA9EC9;
    font-weight: lighter;
  }

  .lien_404{
    text-transform: uppercase;
    display: flex;
  }

  .lien_404 a {
    margin-top: 2rem;
    margin-right: 2rem;
    padding: 0.5rem 1rem 0.5rem 1rem;
    font-weight: bold;
    font-size: 1.5rem;
    border-radius: 18px;
    transition-duration: 0.5s;
  }

  .lien_404 .accueil{
    background-color: #47488C;
    color: white;
  }

  .lien_404  .prec{
    background-color: #47488C;
    color: white;

  }

  .lien_404  .prec:hover{
    background-color: #DEC6EB;
    color: #47488C;

  }

  .lien_404  .accueil:hover{
    background-color: #DEC6EB;
    color: #47488C;

  }



</style>
