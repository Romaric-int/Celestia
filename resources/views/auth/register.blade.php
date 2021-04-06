@extends('templates.template')

@section('content')
<div class="container_inscri">

                <div class="titre_log titre_crea">{{ __("Création d'un nouvel astronaute") }}</div>

                <div class="flex-form">



                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form_inscri">

                            <div class="info_form">


                            <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                  </div>
                                  <div class="info_form">


                              <label for="prenom" class="">Prénom</label>
                              <input id="prenom" type="text" class="form-control @error('name') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>

                                  @error('prenom')
                                      <span class="" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror

                                  </div>






                        <div class="info_form form_email">


                            <label for="email" class="">{{ __('E-mail') }}</label>


                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmation') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                      </div>

                      <div class="avatar_chose">



                      <label for="avatar" class="">Choisissez votre avatar</label>

                      <select id="select" name="avatar" onchange="change();" style="background: url('/img/avatar/default.png') center center / cover no-repeat;">
                        <option value="/img/avatar/default.png" style="background-image:url('/img/avatar/default.png'); width:100px; height:100px;">Numéro 1</option>
                        <option value="/img/avatar/tete_contente.png" style="background:url('/img/avatar/tete_contente.png') no-repeat; width:100px; height:100px;">Numéro 2</option>
                        <option value="/img/avatar/tete_oeil.png" style="background:url('/img/avatar/tete_oeil.png') no-repeat; width:100px; height:100px;">Numéro 3</option>
                        <option value="/img/avatar/tete_sourire.png" style="background:url('/img/avatar/tete_sourire.png') no-repeat; width:100px; height:100px;">Numéro 4</option>
                      </select>

                      </div>

                        <div class="form-group btn_validate row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn_connec btn-primary">
                                    {{ __('Devenir astronaute') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="register">


<p>Vous avez déja un compte ?</p>
<a class="btn_crea" href="{{ route('login') }}">{{ __("Se connecter") }}</a>

</div>
<style media="screen">
  body {
    background-color: #303156;
    color: white;
    background-image: url('/img/profil/fondconnexion.svg');
    background-position: right;
  }

  .footer {
    display: none !important;
  }
</style>
@endsection
