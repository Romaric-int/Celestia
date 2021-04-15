@extends('templates.template')

<title>Celestia - Jouer, créer, explorer | Un espace pour les enfants</title>
<meta name="description" content="Vous aimez l'astronomie et souhaitez découvrir les bases de l'astronomie ? Celestia est fait pour toi ! Ici, tu pourras jouer, créer et explorer notre univers.">
<meta name="robots" content="index,follow">

@section('content')


<section class="index-presentation" id="index-presentation">
  <div class="intro-txt2">
    <h1>Bienvenue à toi petit astronaute !</h1>
    <h3  id="test">Prêt pour l'aventure?</h3>
    <a href="#index-presentation" class="btn-w" id="targetIndex">C'est par ici</a>
  </div>
  <img src="../img/illustration/laika-1.svg" class="blur" alt="laika"  width="1500" height="950">

  <div class="txt_intro">


    <p id="pre-1" class="blur">Salut à toi jeune habitant de la terre ! Bienvenue sur <strong>Celestia</strong> !</p>
    <p id="pre-2" class="blur"><strong>Celestia</strong> est un site internet qui te propose de découvrir l’espace afin de devenir un véritable petit astronaute. </p>
    <p id="pre-3" class="blur">Ici tu découvriras l’univers de l’espace grâce à un <strong>jeu vidéo</strong>, des <strong>quizz</strong>, et même des <strong>ateliers manuels</strong> !
      Une véritable excursion à travers l’espace s’offre à toi.</p>
    <a href="#laika_debout" class="blur blur_btn btn_connec" id="startIndex">C'est parti !</a>


  </div>



</section>

<section class="pre-laika" id="">

  <div class="laika-flex">


      <h1>QUI EST NOTRE
    MASCOTTE LAIKA ?</h1>
      <img id="laika_debout" data-aos="fade-down"
     data-aos-anchor-placement="center-bottom" src="/img/laika/tete_sourire.png" width="292" alt="">
      <h1 id="h1laika2">LAIKA est le premier être vivant envoyé dans l’espace,
    en 1957 !
      </h1>

  </div>
  <p>Elle te suivra tout au long de ton voyage et de ton aventure sur Célestia…</p>





</section>




<section class="index-nav-menu">




  <svg id="trait-i" xmlns="http://www.w3.org/2000/svg" width="1950.493" height="3400.83" viewBox="0 0 1950.493 4987.83">
  <path id="Tracé_13" data-name="Tracé 13" d="M340.008,1969.922s69.893,118.923,240.914,195.743,235.1,59.409,443.171,111.535c287.152,71.938,543.55,93.368,640.282,155.076,166.492,106.21,168.223,296.574,132.24,392.3s-168.75,313.953-566.032,441.288-852.532,18.3-1023.1,68.052S-4.441,3474.552,39.333,3652.223s123.432,405.646,686.773,481.005,204.524,461.74,738.317,285.625c406.1-80.548,374.685,271.545,330.762,352.886-16.3,30.178-94.3,175.1-261.941,150.095-42.679,25.044-579.406,30.049-926.376,189.879S173.959,5384.224,117.76,5441.052s-196.1,207.035-219.681,377.711c-5.838,42.264-16.406,88.169-21.23,133.71-6.994,66.017-1.666,130.968,48.887,181.278,113.905,132.826,1042.988-275.978,834.232,564.407-76.274,347.646,823.662,263,837.53,180.549" transform="translate(128.06 -1966.5)" fill="none" stroke="#af96c3" stroke-linecap="round" stroke-width="5" stroke-dasharray="10"/>

  </svg>


  <div class="i-menu menu1">
    <div class="txt-menu txt-menu1">
      <h1>Un jeu pour apprendre !</h1>
      <p>Tu peux choisir de débuter l’excursion directement en cliquant sur le bouton jouer, afin de venir au secours de LAIKA et d’en apprendre plus sur l’espace …</p>
      <a id="btn-jouer-i"class="btn-w" href="game">JOUER</a>

    </div>
      <img class="img-menu1" data-aos="fade-left" data-aos-duration="1000"data-aos-delay="300"  data-aos-offset="0" src="/img/illustration/game.png" alt="">
  </div>


  <div class="i-menu menu2">
    <div class="txt-menu txt-menu2">
      <h1 id="h12-i">Des ateliers manuels !</h1>
      <p id="p2-i">Jette un oeil aux ateliers manuels qui te permettront de construire des outils utiles dans la vie de tous les jours! Pour te retrouver dans l’espace ou décorer ta chambre…</p>
      <a id="btn-creer-i" class="btn-w" href="/creer">CREER</a>

    </div>
    <img class="img-menu2" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300"  data-aos-offset="0"src="/img/illustration/DIY.png" alt="">


  </div>

  <div class="i-menu menu3">
    <div class="txt-menu text-menu3">
      <h1>Tu souhaites observer le ciel ?</h1>
      <p>Découvre le calendrier des phénomènes astrologiques de Celestia afin d’observer et de comprendre le ciel le soir !</p>
      <a id="btn-calen-i" class="btn-w" href="/calendrier">CALENDRIER</a>

    </div>
    <img id="bulle3-i" data-aos="fade-left" data-aos-duration="1000"data-aos-delay="300" data-aos-anchor-placement="center-bottom" data-aos-offset="300" src="/img/illustration/Calender.png" alt="">




  </div>



  <div class="formulaire">
    <div data-aos="fade-right" class="info-form">
      <p class="formulaire-description">
      <strong>VOUS AVEZ DES
      REMARQUES À NOUS
      FAIRE?
      <br>
      <br>
      N’HÉSITEZ PAS !</strong>
      <br>
      <br>
      <span>Nous prenons en note chacune de vos
      remarques , et nous essayons de vous
      répondre le plus vite possible !</span>
      </p>

    </div>
    @csrf
    <div data-aos="fade-left" class="formulaire-contact">
      <form class="form-user" action="#" method="#">
        <div class="input-form">
          <label for="name">NOM*</label>
          <input type="text" name="nom" value="">
        </div>

        <div class="input-form">
          <label for="prenom">PRENOM*</label>
          <input type="text" name="prenom" value="">
        </div>
        <div class="input-form e-mail">
          <label for="email">EMAIL*</label>
          <input class="" type="email" name="email" value="">
        </div>



        <div class="input-form mess">
          <label for="message">VOTRE MESSAGE*</label>
          <input class="mess" type="text" name="message" value="">
        </div>
        <input type="button" name="submit" value="Envoyer">
        </form>


    </div>
  </div>



</section>



@endsection
<script type="text/javascript" src="/js/jquery.js"></script>
<style media="screen">
  .home {
    background-color: #F28DD1 !important;
  }
  .main-header {
      position: fixed !important;
      z-index: 200;
      visibility: hidden;
    }
  body {
    overflow-y: hidden;
  }
  .formulaire {
    position: relative !important;
    z-index: 10;
    margin-bottom: 100px;
  }

</style>
