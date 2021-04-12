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

new Question("Les astronautes, lors de leur séjour dans l’espace...",
["Grandissent de quelques centimètres","Se transforment en chien", "Obtiennent la capacité de tirer des lasers avec les yeux.", "Deviennent plus petit"], "Grandissent de quelques centimètres"),

new Question("Quelle proposition permet aux astronautes d’éviter les problèmes de l’apesanteur ?",
["Les astronautes portent des bottes en plomb","Les astronautes dorment dans des sacs de couchage accrochés aux parois de la station", "Les astronautes ne mangent plus rien", "Ils ne respirent plus"], "Les astronautes dorment dans des sacs de couchage accrochés aux parois de la station"),

new Question("Qui est le premier homme à être allé dans l’espace ?",
["Youri Alexeïevitch Gagarine","Buzz Aldrin", "Neil Armstrong", "Titeuf"], "Youri Alexeïevitch Gagarine")
];

let questions2 = [
new Question("Sur la lune, la pesanteur ...",
["est la même que sur la Terre", "est 6 fois plus faible que sur la Terre", "n'existe pas", "est la même que le soleil"], "est 6 fois plus faible que sur la Terre"),

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
    elementShownId: function(id, text) {
      let element = document.getElementById(id);
      element.innerHTML = text;
    },
    elementShownClass: function(id, classname, text) {
      let element2 = document.getElementById(id).getElementsByClassName(classname)[0];
      element2.innerHTML = text;
    },



      endQuiz: function() {
        endQuizHTML = `
          <h1 class='end_quizz'>Quiz terminé !</h1>
          <h3 class='score_quizz'> Ton score est de : ${quiz.score} / ${quiz.questions.length}</h3>
          <p class='p_quizz'>Tu n'as pas réussi le quizz tu peux le recommencer ou  revoir la vidéo</p>
          <a href="/game/1" class="revoir_video">Revoir la vidéo</a>
          <a href="/game" class='restart'>Recommencer</a>`;
        this.elementShownId("quiz1", endQuizHTML);
      },



      win: function() {
        endQuizHTML = `
          <h1 class='end_quizz'>Quiz terminé !</h1>
          <h3 class='score_quizz'> Ton score est de : ${quiz.score} / ${quiz.questions.length}</h3>
          <p class='p_quizz'>Tu as réussi le quizz tu peux le recommencer ou continuer</p>
          <a href="/nextStory" class="next_quizz">Continuer</a>
          <a href="/game" class='restart'>Recommencer</a>`;
        this.elementShownId("quiz1", endQuizHTML);
      },



      question: function() {
        this.elementShownId("question1", quiz.getCurrentQuestion().text);
      },





      choices: function() {
        let choices = quiz.getCurrentQuestion().choices;

        guessHandler = (id, classname ,guess) => {
          document.getElementById(id).getElementsByClassName(classname)[0].onclick = function() {
            quiz.guess(guess);
            quizApp();
          }
        }
        // display choices and handle guess
        for(let i = 0; i < choices.length; i++) {

          this.elementShownClass("quiz1", "choice" + i, choices[i]);
          guessHandler("quiz1","guess" + i, choices[i]);

        }
      },

      endQuiz2: function() {
        endQuizHTML = `
          <h1 class='end_quizz'>Quiz terminé !</h1>
          <h3 class='score_quizz'> Ton score est de : ${quiz2.score} / ${quiz2.questions.length}</h3>
          <p class='p_quizz'>Tu n'as pas réussi le quizz tu peux le recommencer ou  revoir la vidéo</p>
          <a href="/game/2" class="revoir_video">Revoir la vidéo</a>
          <a href="/game" class='restart'>Recommencer</a>`;
        this.elementShownId("quiz2", endQuizHTML);
      },



      win2: function() {
        endQuizHTML = `
          <h1 class='end_quizz'>Quiz terminé !</h1>
          <h3 class='score_quizz'> Ton score est de : ${quiz2.score} / ${quiz2.questions.length}</h3>
          <p class='p_quizz'>Tu as réussi le quizz tu peux le recommencer ou continuer</p>
          <a href="/nextStory" class="next_quizz">Continuer</a>
          <a href="/game" class='restart'>Recommencer</a>`;
        this.elementShownId("quiz2", endQuizHTML);
      },



      question2: function() {
        this.elementShownId("question2", quiz2.getCurrentQuestion().text);
      },





      choices2: function() {
        let choices = quiz2.getCurrentQuestion().choices;

        guessHandler = (id, classname ,guess) => {
          document.getElementById(id).getElementsByClassName(classname)[0].onclick = function() {
            quiz2.guess(guess);
            quizApp2();
          }
        }
        // display choices and handle guess
        for(let i = 0; i < choices.length; i++) {

          this.elementShownClass("quiz2", "choice" + i, choices[i]);
          guessHandler("quiz2" ,"guess" + i, choices[i]);

        }
      },

      endQuiz3: function() {
        endQuizHTML = `
          <h1 class='end_quizz'>Quiz terminé !</h1>
          <h3 class='score_quizz'> Ton score est de : ${quiz3.score} / ${quiz3.questions.length}</h3>
          <p class='p_quizz'>Tu n'as pas réussi le quizz tu peux le recommencer ou  revoir la vidéo</p>
          <a href="/game/3" class="revoir_video">Revoir la vidéo</a>
          <a href="/game" class='restart'>Recommencer</a>`;
        this.elementShownId("quiz3", endQuizHTML);
      },



      win3: function() {
        endQuizHTML = `
          <h1 class='end_quizz'>Quiz terminé !</h1>
          <h3 class='score_quizz'> Ton score est de : ${quiz3.score} / ${quiz3.questions.length}</h3>
          <p class='p_quizz'>Tu as réussi le quizz tu peux le recommencer ou continuer</p>
          <a href="/nextStory" class="next_quizz">Continuer</a>
          <a href="/game" class='restart'>Recommencer</a>`;
        this.elementShownId("quiz3", endQuizHTML);
      },



      question3: function() {
        this.elementShownId("question3", quiz3.getCurrentQuestion().text);
      },





      choices3: function() {
        let choices = quiz3.getCurrentQuestion().choices;

        guessHandler = (id, classname ,guess) => {
          document.getElementById(id).getElementsByClassName(classname)[0].onclick = function() {
            quiz3.guess(guess);
            quizApp3();
          }
        }
        // display choices and handle guess
        for(let i = 0; i < choices.length; i++) {

          this.elementShownClass("quiz3", "choice" + i, choices[i]);
          guessHandler("quiz3" ,"guess" + i, choices[i]);

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
  if (quiz2.hasEnded()) {
    if (quiz2.hasWin()) {
      display.win2();
    }
    else {
      display.endQuiz2();
    }

  } else {
    display.question2();
    display.choices2();

  }


}

quizApp3 = () => {
  if (quiz3.hasEnded()) {
    if (quiz3.hasWin()) {
      display.win3();
    }
    else {
      display.endQuiz3();
    }

  } else {
    display.question3();
    display.choices3();

  }


}





let quiz = new Quiz(questions);
quizApp();

let quiz2 = new Quiz(questions2);
quizApp2();

let quiz3 = new Quiz(questions3);
quizApp3();
