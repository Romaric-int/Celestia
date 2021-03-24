@extends('templates.template')

@section('content')
<div class="oui">

</div>
@endsection

<style media="screen">
  .game {
    background-color: #F28DD1 !important;
  }
  body {
    background-image: url('/img/game/fond_game.svg');
    background-position: left;
    background-repeat: no-repeat;

  }

  .oui {
    width: 3687px;
    height: 10px;
  }
  .main-header {
    position: fixed !important;
  }

  .logo-header {
    margin-right: 200px;
    margin-left: 100px;
  }
</style>

<script type="text/javascript">
  addEventListener("load", function(){
  document.body.addEventListener("wheel", function(e){
  e.preventDefault();
  document.body.scrollLeft+=e.deltaY<0 ? -300 : 300
  }, false);}, false);
</script>
