@extends('templates.template')


@section('content')

<section class="intro_diy">
  <div class="div_introDIY1">
    <div class="text_introDIY1">


      <h1>Creer</h1>
      <p>Ici tu retrouveras plein d’ateliers manuels qui te permettront de décorer ta chambre,
        de … Grâce à du matériel que tu as déjà chez toi !</p>
    </div>
    <img src="/img/diy/fusee_diy.svg" alt="fusee">

  </div>
  <div class="div_introDIY2">



        <h1>Nos   Diy</h1>
        <svg xmlns="http://www.w3.org/2000/svg" width="195.204" height="171.185" viewBox="0 0 195.204 171.185">
        <g id="Groupe_8" data-name="Groupe 8" transform="matrix(0.985, 0.174, -0.174, 0.985, -1009.68, -690.897)" opacity="0.75">
          <path id="Tracé_46" data-name="Tracé 46" d="M1171.465,503.137c9.195,0,19.487,4.953,31.465,15.142,8.932,7.6,15.942,12.306,23.282,12.306,5.255,0,10.549-2.529,16.184-7.73,1.09-1.006,2.189-2.067,3.352-3.19,3.616-3.49,7.715-7.445,12.388-10.447a29.406,29.406,0,0,1,16.2-5.1,32.758,32.758,0,0,1,11.366,2.184c9.445,3.5,16.5,11.068,20.394,21.871a60.41,60.41,0,0,1,2.664,28.6c-2.773,18.391-8.623,33.249-18.969,48.178-13.2,19.048-30.947,31.655-49.966,35.5a65.164,65.164,0,0,1-12.87,1.248,82.885,82.885,0,0,1-29.264-5.641,92.385,92.385,0,0,1-27.042-16.151,81.254,81.254,0,0,1-18.667-23.946,99.558,99.558,0,0,1-10.739-40.539,68.9,68.9,0,0,1,6.56-33.97c4.627-9.375,11.014-15.758,17.523-17.511a23.582,23.582,0,0,1,6.133-.8Zm0-.387a23.682,23.682,0,0,0-6.19.808c-13.317,3.587-25.8,26.258-24.316,51.89,1.916,33.056,17.013,53.963,29.538,64.779,16.275,14.055,37.222,21.854,56.465,21.854a65.206,65.206,0,0,0,12.914-1.253c17.865-3.611,36.02-15.253,50.136-35.62,11.248-16.228,16.489-31.436,19.041-48.364s-1.962-43.014-23.266-50.919a32.745,32.745,0,0,0-11.445-2.2c-14.532,0-24.04,11.357-32.111,18.809-5.826,5.377-10.984,7.661-16.018,7.661-7.4,0-14.537-4.939-23.125-12.244-11.758-10-22.268-15.2-31.623-15.2Z" transform="translate(0 0)" fill="#fa6ff5" stroke="#fa6ff5" stroke-miterlimit="10" stroke-width="4"/>
        </g>
      </svg>



  </div>
</section>

<section class="les_diy">

  @foreach($diy as $p)
  <div class="solo_diy">


    <div class="">
      <img src="{{$p->url}}" alt="">

    </div>

    <div class="">
      <h2>{{$p->name}}</h2>

    </div>

    <div class="desc_diy">
      <p>Rapide</p>
      <p>Facile</p>
      <p>Bon marché</p>
    </div>

    <div class="">
      <a class="btn btn_diy" href="/creer/{{$p->id}}">Découvrir</a>

    </div>
  </div>
  @endforeach




</section>
<section class="footer_d_game">

  <div class="i-menu menu1 menu_diy">
    <div class="txt-menu txt-menu1">
      <h1>Un jeu pour apprendre !</h1>
      <p>Tu peux choisir de débuter l’excursion directement en cliquant sur le bouton jouer, afin de venir au secours de LAIKA et d’en apprendre plus sur l’espace …</p>
      <a id="btn-jouer-i"class="btn-w" href="game">JOUER</a>

    </div>
      <img data-aos="fade-left" data-aos-duration="1000"data-aos-delay="300"  data-aos-offset="0" src="/img/illustration/game.png" alt="">
  </div>


</section>


@endsection





<style media="screen">

body {
  background-color: #303156 !important;
}

.i-menu h1 {
    color: white !important;
}
.i-menu p {
    color: white !important;
}

</style>
