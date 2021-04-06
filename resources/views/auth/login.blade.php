@extends('templates.template')


@section('content')



<div class="container_connexion">


                <div class="titre_log">{{ __('Connexion') }}</div>

                <div >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div >
                            <label for="email">Mail</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>


                            <div class="btn_connec_forget offset-md-4">
                                <button type="submit" class="btn btn-primary btn_connec">
                                    {{ __('Connexion') }}
                                </button><br>

                                @if (Route::has('password.request'))
                                    <a class="mdp_forget" href="{{ route('password.request') }}">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif
                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="register">


<p>Vous voulez vous créer un compte ?</p>
<a class="btn_crea" href="{{ route('register') }}">{{ __("Création d'un compte") }}</a>

</div>
@endsection

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
