@extends('templates.template')


@section('content')

<div class="stat_profil">
@foreach ($data as $p)



  <h1>Mon nom est : {{ $p->name}} {{$p->prenom }}</h1>
  <?php $pro = Auth::user()->step_vid/5*100;  ?>
  <h1>Aventure : {{$pro}}%</h1>

  <h1>Planétes visités : {{$p->step_vid}}</h1>

@endforeach
</div>
@endsection


<style media="screen">
  body {
    background-color: #303156;
  }
</style>
