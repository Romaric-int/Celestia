<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\diy;
use App\Models\Video;
use App\Models\User;
use App\Models\Planete;
use App\Models\Mess;
use Illuminate\Http\Request;
use Carbon\Carbon;

class FirstController extends Controller
{
    //
    public function index(){
      return view("firstcontroller.index");
    }

    public function game(){

      $planete = Planete::all();

      return view("firstcontroller.game", ["planete" => $planete]);
    }

    public function contact(){
      return view("firstcontroller.contact");
    }

    public function creer(){
      $diy = diy::all();
      return view("firstcontroller.creer", ["diy" => $diy]);
    }
    public function calendrier(){
      return view("firstcontroller.calendrier");
    }

    public function diy($id){
      $recette = diy::findOrFail($id);
      $tab_diy="";
      if ($id==1) {
        $tab_diy = ["step" => "Peignez votre rouleau de papier toilette partout.", "step2" => "Découpez un cercle de carte. Pour cela, dessinez autour d'un dessous de verre ou d'une petite assiette pour couper un cercle de carton (il doit être plus large que le papier de toilette). Ensuite, coupez le cercle du bord jusqu’au centre de celui-ci
","step3" => "Faites le nez de la fusée: il suffit de faire un cône à partir de votre cercle de cartes pour former le bout de la fusée. Collez-le ensuite sur le haut du papier toilette.",
      "step4" => "Maintenant, attachez le nez à votre fusée. C'est la partie la plus compliquée ! Un pistolet à colle fonctionne bien mais vous pouvez utiliser du ruban adhésif pour le faire tenir en place.
", "step5" => "Ajoutez des fenêtres à votre super fusée ! Découpez deux petits cercles de votre carton (vous pouvez les peindre et les customiser comme vous le souhaitez). Collez-les sur le tube de votre fusée pour faire les jolies fenêtres.", "step6" => "Découpez des bandes de papier de soie jaune et orange pour créer les flammes qui sortiront du fond de vos fusées lors de leur lancement", "step7" => "Maintenant vous allez coller les flammes sur la fusée: mettez un peu de colle sur vos bandes de tissu et collez-les à l'intérieur de votre tube. Votre fusée est prête à aller dans l'espace !
"];

        $tab_prep = ["prep1" => "Une paire de ciseaux", "prep2" => "De la colle ", "prep3" => "De la ficelle ou du fil", "prep4"=>"Une imprimante", "prep5" => "Un morceau de carton de 20 x 20 cm ou un cintre"];
        }
      elseif ($id==2) {
        $tab_diy = ["step" => "Imprimer le patron des planètes du système solaire disponible ici.", "step2" => "Colorier et découper chaque planète ( en faisant attention à colorier les deux faces d’une même planète de la même couleur ). Puis plier chaque planète en 2 (face coloré vers l’intérieur)","step3" => "Découper 9 bouts de ficelles variants entre 10 et 30 cm.",
      "step4" => "Si vous avez choisi d’utiliser le cintre comme support du mobile vous pouvez attacher les ficelles à ce dernier à distances égales en faisant de petits nœuds. Autrement, munissez-vous de votre morceau de carton et tracez un cercle de 30 cm de diamètre. Découper le cercle pour pouvoir y accrocher les morceaux de ficelles.", "step5" => "Enfin, coller les parties blanches de chaque planète entre elles en glissant l'extrémité de la ficelle entre les deux (sécuriser avec de la colle).", "step6" => "TADA profite de ton système solaire portatif et va vite l’accrocher dans ta chambre!"];

        $tab_prep = ["prep1" => "Carte colorée ou à motifs", "prep2" => "Papier de soie jaune et orange ", "prep3" => "Peintures - nous préférons les peintures acryliques", "prep4"=>"Pinceau", "prep5" => "Les ciseaux", "prep6" => "Colle et scotch"];
      }
      elseif ($id==3) {
        $tab_diy = ["step" => "Utilisez le poinçon ou des ciseaux pour découper chacun des six cercles de constellation du modèle.
", "step2" => "Collez chaque modèle de constellation au fond d'un mini moule à cupcake.
","step3" => "Découpez soigneusement les cercles rouges qui indiquent les étoiles dans chacune des constellations.",
      "step4" => "Enroulez le cupcake autour du haut de la lampe de poche et fixez-la avec de la ficelle
", "step5" => "Vous pouvez apposer les moules cupcake sur la lampe de poche de manière plus permanente avec un pistolet à colle chaude, mais avec de la ficelle, vous pouvez facilement échanger et afficher les différentes constellations.
"];
      $tab_prep = ["prep1" => "1 ou plusieurs lampes de poches", "prep2" => "6 mini moules à cupcakes ", "prep3" => "le modèle des constellations", "prep4"=>"ciseaux", "prep5" => "tube de colle","prep6" => "ficelle","prep7"=>"imprimante"];
      }



      return view("firstcontroller.diy",  ["tab_diy" => $tab_diy,"recette" => $recette,"tab_prep" => $tab_prep]);
    }

    public function profil($id){
      $profil = User::findOrFail($id);
      $nowdate = Carbon::now();
      $startdate = Auth::user()->created_at;
      $data = User::all();
      $date = $startdate->diffInDays($nowdate);

      return view("firstcontroller.profil", ["data" => $data], ["date" => $date]);
    }

    public function video($id){
      $video = Video::findOrFail($id);


      return view("firstcontroller.video", ["video" => $video]);
    }

    public function nextStep(){
      $id = Auth::id();
      $update = User::where('id', $id);
      $update->increment('step_story');

      return redirect('/game');
    }

    public function nextStory(){
      $id = Auth::id();
      $update = User::where('id', $id);
      $update->increment('step_vid');

      return redirect('/game');
    }

    public function quizz($id){

      $planete = Planete::all();
      return view("firstcontroller.quiz", ["planete" => $planete]);

    }

    public function newmess(Request $request){

      $mess = new Mess();
      $mess->nom = $request->input('nom');
      $mess->prenom = $request->input('prenom');
      $mess->email = $request->input('email');
      $mess->message = $request->input('message');

      $mess->save();
      return redirect("/");
    }
}
