let answer = '';
let maxWrong = 6;
let mistakes = 0;
let guessed = [];
let wordStatus = null; 
let categories;
let chosenCategory = '';
let word;

// Pilih kategori
var selectCat = function () {
  if (chosenCategory === categories[0]) {
    document.getElementById('catagoryName').innerHTML = "The Chosen Category is Premier League Football Teams";
  } else if (chosenCategory === categories[1]) {
    document.getElementById('catagoryName').innerHTML = "The Chosen Category is Films";
  } else if (chosenCategory === categories[2]) {
    document.getElementById('catagoryName').innerHTML = "The Chosen Category is Cities";
  } else if (chosenCategory === categories[3]) {
    document.getElementById('catagoryName').innerHTML = "The Chosen Category is Programming Languages";
  }
}

// Kunci jawaban
play = function () {
  categories = [
    ["everton", "liverpool", "swansea", "chelsea", "hull", "manchester-city", "newcastle-united"],
    ["alien", "dirty-harry", "gladiator", "finding-nemo", "jaws"],
    ["manchester", "milan", "madrid", "amsterdam", "prague"],
    ["python", "javascript", "mongodb", "json", "java", "html", "css", "c", "csharp", "golang", "kotlin", "php", "sql","ruby"]
  ];
}

// Ngacak soal
function randomWord() {
  chosenCategory = categories[Math.floor(Math.random() * categories.length)];
  word = chosenCategory[Math.floor(Math.random() * chosenCategory.length)];
}

// Tombol keyboard
function generateButtons() {
  let buttonsHTML = 'abcdefghijklmnopqrstuvwxyz'.split('').map(letter =>
    `
      <button
        class="btn btn-lg btn-primary m-2"
        id='` + letter + `'
        onClick="handleGuess('` + letter + `')"
      >
        ` + letter + `
      </button>
    `).join('');

  document.getElementById('keyboard').innerHTML = buttonsHTML;
}

// Analisis jawaban
function handleGuess(chosenLetter) {
  guessed.indexOf(chosenLetter) === -1 ? guessed.push(chosenLetter) : null;
  document.getElementById(chosenLetter).setAttribute('disabled', true);

  if (word.indexOf(chosenLetter) >= 0) {
    guessedWord();
    checkIfGameWon();
  } else if (word.indexOf(chosenLetter) === -1) {
    mistakes++;
    updateMistakes();
    checkIfGameLost();
    updateHangmanPicture();
  }
}

function updateHangmanPicture() {
  document.getElementById('hangmanPic').src = './images/' + mistakes + '.jpg';
}

function checkIfGameWon() {
  if (wordStatus === word) {
    document.getElementById('keyboard').innerHTML = 'You Won!!!';
  }
}

function checkIfGameLost() {
  if (mistakes === maxWrong) {
    document.getElementById('wordSpotlight').innerHTML = 'The answer was: ' + word;
    document.getElementById('keyboard').innerHTML = 'You Lost!!!';
  }
}

// Titik-titik soal
function guessedWord() {
  wordStatus = word.split('').map(letter => (guessed.indexOf(letter) >= 0 ? letter : " _ ")).join('');

  document.getElementById('wordSpotlight').innerHTML = wordStatus;
}

function updateMistakes() {
  document.getElementById('mistakes').innerHTML = mistakes;
}

function reset() {
  mistakes = 0;
  guessed = [];
  document.getElementById('hangmanPic').src = './images/0.jpg';
  
  play();
  randomWord();
  selectCat();
  guessedWord();
  updateMistakes();
  generateButtons();
}

document.getElementById('maxWrong').innerHTML = maxWrong;

play();
randomWord();