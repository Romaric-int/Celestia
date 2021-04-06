
@extends('templates.template')


@section('content')

<svg xmlns="http://www.w3.org/2000/svg" class="trait" width="1614.093" height="1692.697" viewBox="0 0 1614.093 1692.697">
  <path id="Tracé_19" data-name="Tracé 19" d="M4083,248.5s505.332-179.627,682.4,99.355,130.724,358.336-209.768,499.194-944.217-90.93-1152.2,64.237S3164.1,1572.557,3723.7,1467.717s389.815,176.67,487.069,316.042,460.064,110.99,663.823,20.747" transform="translate(-3263.142 -189.565)" fill="none" stroke="#a994c3" stroke-linecap="round" stroke-width="4" stroke-dasharray="10"/>
</svg>


<div class="introduction">


  <h1 class="titre-contact">CONTACT</h1>
  <h2>QUI SE CACHE DERRIERE CELESTIA?</h2>
  <p>Nous sommes un groupe de <strong>5 étudiants</strong> tous
  passionnés par l’espace et l’astronomie.
  Pour notre projet universitaire, nous avons
  donc décidé de combiner passion et utile:
  <strong>enseigner l’astronomie aux enfants.</strong></p>

  <img class="ilu_contact"src="/img/contact-nous/contact.svg" width="50%"alt="">
</div>

<div class="intro-us">
  <div class="creator">
    <img src="../img/contact-nous/Romaric.png" alt="icone" width="70" height="70">
    <h3>Romaric</h3>
  </div>
  <div class="creator">
    <img src="../img/contact-nous/leo.png" alt="icone" width="70" height="70">
    <h3>Leo</h3>
  </div>
  <div class="creator">
    <img src="../img/contact-nous/Cécile.png" alt="icone" width="70" height="70">
    <h3>Cécile</h3>
  </div>
  <div class="creator">
    <img src="../img/contact-nous/Marine.png" alt="icone" width="70" height="70">
    <h3>Marine</h3>
  </div>
  <div class="creator">
    <img src="../img/contact-nous/louis.png" alt="icone" width="70" height="70">
    <h3>Louis</h3>
  </div>
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
        <input class="" type="text" name="email" value="">
      </div>



      <div class="input-form mess">
        <label for="message">VOTRE MESSAGE*</label>
        <input class="mess" type="text" name="message" value="">
      </div>
      </form>
      <input type="button" name="submit" value="Envoyer">

  </div>
</div>





@endsection

<style media="screen">
  .contact {
    background-color: #F28DD1 !important;
  }
  body {
    background-image: url("/img/contact-nous/fond.svg") !important;
    overflow-x: hidden;
  }

  .trait{
    left: -0%;
    position: relative;
  }

  .introduction h2{
    text-align: right;
    position: relative;
  }

  .introduction h2{
    text-align: right;
    position: relative;
  }

  .footer {

    position: relative;
    margin-top: -13rem;

  }

</style>
