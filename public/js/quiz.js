class Question {
  constructor(text, choices, answer) {
    this.text = text;
    this.choices = choices;
    this.answer = answer;
  }
  isCorrectAnswer(choice) {
    return this.answer === choice;
  }
}
let questions = [
new Question("Quelles sont les langues à maîtriser absolument pour une mission dans la station internationale ?",
["Anglais et Français", "Français et Allemand", "Russe et Chinois", "Anglais et Russe"], "Anglais et Russe"),

new Question("Les astronautes grandissent de quelques centimètres lors de leur séjour dans l’espace ?",
["Vrai","Non, ils se transforment en chien", "Faux", "Non, ils deviennent plus petit"], "Vrai"),

new Question("Quelle proposition permet aux astronautes d’éviter les problèmes de l’apesanteur ?",
["Les astronautes portent des bottes en plomb","Les astronautes dorment dans des sacs de couchage accrochés aux parois de la station", "Les astronautes ne mangent plus rien", "Ils ne respirent plus"], "Les astronautes dorment dans des sacs de couchage accrochés aux parois de la station"),

new Question("Qui est le premier homme à être allé dans l’espace ?",
["Youri Alexeïevitch Gagarine","Buzz Aldrin", "Neil Armstrong", "Titeuf"], "Youri Alexeïevitch Gagarine")
];



let questions2 = [
new Question("Sur la lune, la pesanteur ...",
["est la même que sur la Terre", "est 6 fois plus faible que sur la Terre", "n'existe pas", "est la même que le soleil"], "6 fois plus faible que sur la Terre."),

new Question("Quelle est la planète du système solaire qui possède le plus de lunes ?",
["Saturne","Jupiter", "Vénus", "la Terre"], "Saturne"),

new Question("La première phase de la Lune, c’est :",
["La nouvelle Lune","La pleine Lune", "Le premier croissant", "Le dernier quartier"], "La nouvelle Lune"),

new Question("Qui est le premier homme à être allé sur la Lune",
["Mickey","Buzz Aldrin", "Neil Armstrong", "Thomas Pesquet"], "Neil Armstrong")
];

let questions3 = [
new Question("Quelle est la plus grosse planète du système solaire ?",
["Jupiter", "Saturne", "Neptune", "La Terre"], "Jupiter"),

new Question("De quoi sont composées les planètes géantes du système solaire ?",
["De métal","De pierre", "De bonbons", "De gaz"], "De gaz"),

new Question("Quelle planète du Système Solaire est la plus éloignée du Soleil ?",
["Mercure", "Uranus", "Neptune", "La Terre"], "Neptune"),

new Question("Quelle planète est particulièrement connue pour ses anneaux ?",
["Vénus","Jupiter", "Saturne", "Mars"], "Saturne")
];





class Quiz {
  constructor(questions) {
    this.score = 0;
    this.questions = questions;
    this.currentQuestionIndex = 0;
  }
  getCurrentQuestion() {
    return this.questions[this.currentQuestionIndex];
  }
  guess(answer) {
    if (this.getCurrentQuestion().isCorrectAnswer(answer)) {
      this.score++;
    }
    this.currentQuestionIndex++;
  }
  hasEnded() {
    return this.currentQuestionIndex >= this.questions.length;
  }
  hasWin(){
    return this.score >= this.questions.length;
  }
}






const display = {
  elementShown: function(id, text) {
    let element = document.getElementById(id);
    element.innerHTML = text;
  },
  endQuiz: function() {
    endQuizHTML = `
      <h1>Quiz terminé !</h1>
      <h3> Votre score est de : ${quiz.score} / ${quiz.questions.length}</h3>
      <p>Tu n'as pas réussi le quizz tu peux le recommencer ou  revoir la vidéo</p>
      <a href="/game/1" id="revoir_video">Revoir la vidéo</a>
      <a href="/game" class='restart'>Recommencer</a>`;
    this.elementShown("quiz1", endQuizHTML);
  },
  win: function() {
    endQuizHTML = `
      <h1>Quiz terminé !</h1>
      <h3> Votre score est de : ${quiz.score} / ${quiz.questions.length}</h3>
      <p>Tu as réussi le quizz tu peux le recommencer ou continuer</p>
      <a href="/nextStory" id="revoir_video">Continuer</a>
      <a href="/game" class='restart'" class='restart'>Recommencer</a>`;
    this.elementShown("quiz1", endQuizHTML);
  },
  question: function() {
    this.elementShown("question1", quiz.getCurrentQuestion().text);
  },
  choices: function() {
    let choices = quiz.getCurrentQuestion().choices;

    guessHandler = (id, guess) => {
      document.getElementById(id).onclick = function() {
        quiz.guess(guess);
        quizApp();
      }
    }
    // display choices and handle guess
    for(let i = 0; i < choices.length; i++) {
      this.elementShown("choice1" + i, choices[i]);
      guessHandler("guess1" + i, choices[i]);
    }
  },





};





quizApp = () => {
  if (quiz.hasEnded()) {
    if (quiz.hasWin()) {
      display.win();
    }
    else {
      display.endQuiz();
    }

  } else {
    display.question();
    display.choices();

  }
}

quizApp2 = () => {


}


let quiz = new Quiz(questions);
quizApp();

let quiz2 = new Quiz(questions2);
quizApp2();
