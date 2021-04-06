

$( "#targetIndex" ).click(function() {
  $( ".intro-txt2" ).slideUp();
  $(".blur").css("filter","blur(0)");
  $(".blur").css("opacity","1");
  $("body").css("overflow-y","auto");
  $(".main-header").css("display","block");

});


function change() {

select = document.getElementById("select");
select_s = select.style;

switch(select.selectedIndex) {

case 0 :
select_s.background = "url('/img/avatar/default.png') no-repeat center";
select_s.backgroundSize = "cover";
break;

case 1 :
select_s.background = "url('/img/avatar/tete_contente.png') no-repeat";
select_s.backgroundSize = "cover";
break;

case 2 :
select_s.background = "url('/img/avatar/tete_oeil.png') no-repeat";
select_s.backgroundSize = "cover";
break;

case 3 :
select_s.background = "url('/img/avatar/tete_sourire.png') no-repeat";
select_s.backgroundSize = "cover";
break;

default:
select_s.background = "url('/img/avatar/default.png') no-repeat center";
select_s.backgroundSize = "cover";
break;
}
}

window.addEventListener('load', function()
	{
	window.scrollTo(0,0);
	}, false);
