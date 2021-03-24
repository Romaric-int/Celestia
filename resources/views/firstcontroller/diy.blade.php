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



</style>
