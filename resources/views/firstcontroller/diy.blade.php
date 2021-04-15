@extends('templates.template')


@section('content')
<section class="prep_diy">


  <h1>{{$recette->name}}</h1>
  <img src="{{$recette->url}}" alt="">

  <div class="trait_diy">

  </div>

  <div class="expli_diy">


    <ul class="ingre">
      <h1>Matériel</h1>

      @foreach($tab_prep as $key => $val)


        <li>{{$val}}</li>

      @endforeach
      @if($recette->id == 2)
        <a class="pdfload" href="/img/diy/pdf_sys.pdf" download>Télécharger les patrons</a>

      @elseif($recette->id == 3)
        <a class="pdfload" href="#">Télécharger les patrons</a>
      @endif
    </ul>
    <ul class="preparation">
      <h1>Préparation</h1>
    @foreach($tab_diy as $key => $val)


      <li class="{{$key}}">{{$val}}</li>

    @endforeach
    </ul>
  </div>

</section>

@endsection


<style media="screen">
  body {
    background-image: url("/img/diy/fond_diy.svg");
  }

  .pdfload {
    color: white;
    background-color: #F67BD3;
    font-weight: bold;
    padding: 0.3rem 0.7rem 0.3rem  0.7rem;
    border-radius: 20px;
    margin-bottom: 1rem;


  }



</style>
