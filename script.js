/*------------------------- Jeu -------------------------------*/

const eloElement = document.getElementById("elo");
let elo = 0;

const pierreBtn = document.getElementById('rock');
const feuilleBtn = document.getElementById('paper');
const ciseauBtn = document.getElementById('scissors');

function play(userChoice) {
    
    // Donne un choix au hasard à l'ordinateur
    let computerChoice = Math.random();
    if (computerChoice < 0.34) {
        computerChoice = "Pierre";
    } else if (computerChoice <= 0.67) {
        computerChoice = "Feuille";
    } else {
        computerChoice = "Ciseaux";
    }

    //Affiche l'échange de coup
    var gameDiv = document.getElementById('game');
    var enemyDiv = document.getElementById('enemy-game');
    var pierreBtn = document.getElementById('rock-btn');
    var feuilleBtn = document.getElementById('paper-btn');
    var ciseauBtn = document.getElementById('scissors-btn');
    pierreBtn.style.display = 'none';
    feuilleBtn.style.display = 'none';
    ciseauBtn.style.display = 'none'

    var userChoiceImg = document.createElement('img');
    userChoiceImg.src = userChoice + '.png';
    userChoiceImg.width = 100;
    userChoiceImg.height = 100;
    userChoiceImg.classList.add('choice-img');
    gameDiv.appendChild(userChoiceImg);
    
    var computerChoiceImg = document.createElement('img');
    computerChoiceImg.src = computerChoice + '.png';
    computerChoiceImg.width = 100;
    computerChoiceImg.height = 100;
    computerChoiceImg.classList.add('choice-img');
    computerChoiceImg.classList.add('rotate');
    enemyDiv.appendChild(computerChoiceImg);

    //Appelle compare pour déterminer le gagnant et change le elo
    let result = compare(userChoice, computerChoice);

    if(result == "Gagné!")
    {
        elo += 15;
    }else if(result == "Perdu!")
    {
        elo = Math.max(elo - 15, 0);
    }

    //Affiche le gagnant et le nouveau elo
    document.getElementById("result").innerHTML = result;
    eloElement.textContent = elo;

    // Attendre 4 secondes avant de réafficher les boutons
    setTimeout(function() {
        var choicesImgs = document.getElementsByClassName('choice-img');
        while (choicesImgs.length > 0) {
            choicesImgs[0].parentNode.removeChild(choicesImgs[0]);
        }
        pierreBtn.style.display = 'inline-block';
        feuilleBtn.style.display = 'inline-block';
        ciseauBtn.style.display = 'inline-block';
        document.getElementById("result").innerHTML = '';
    }, 3000);
}


//Determine le résultat de l'échange

function compare(choice1, choice2) {
    if (choice1 === choice2) {
        return "Égalité!";
    }
    if (choice1 === "Pierre") {
        if (choice2 === "Ciseaux") {
            return "Gagné!";
        } else {
            return "Perdu!";
        }
    }
    if (choice1 === "Feuille") {
        if (choice2 === "Pierre") {
            return "Gagné!";
        } else {
            return "Perdu!";
        }
    }
    if (choice1 === "Ciseaux") {
        if (choice2 === "Feuille") {
            return "Gagné!";
        } else {
            return "Perdu!";
        }
    }
}

/*------------------------ DARK MODE --------------------------*/
const gameContainer = document.querySelector('.game-container');
const toggleThemeBtn = document.querySelector('.toggle-theme');

toggleThemeBtn.addEventListener('click', function() {
  gameContainer.classList.toggle('dark-mode');
  if (gameContainer.classList.contains('dark-mode')) {
    toggleThemeBtn.textContent = 'Mode clair temporaire';
  } else {
    toggleThemeBtn.textContent = 'Mode sombre temporaire';
  }
});
