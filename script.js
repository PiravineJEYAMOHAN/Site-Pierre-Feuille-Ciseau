const eloElement = document.getElementById("elo");
let elo = 0;

function play(userChoice) {
    let computerChoice = Math.random();
    if (computerChoice < 0.34) {
        computerChoice = "pierre";
    } else if (computerChoice <= 0.67) {
        computerChoice = "feuille";
    } else {
        computerChoice = "ciseaux";
    }
    let result = compare(userChoice, computerChoice);

    if(result == "Gagné!")
    {
        elo += 15;
    }else if(result == "Perdu!")
    {
        elo = Math.max(elo - 15, 0);
    }

    document.getElementById("result").innerHTML = result;
    eloElement.textContent = elo;
}


//Determine le résultat de l'échange
function compare(choice1, choice2) {
    if (choice1 === choice2) {
        return "Égalité!";
    }
    if (choice1 === "pierre") {
        if (choice2 === "ciseaux") {
            return "Gagné!";
        } else {
            return "Perdu!";
        }
    }
    if (choice1 === "feuille") {
        if (choice2 === "pierre") {
            return "Gagné!";
        } else {
            return "Perdu!";
        }
    }
    if (choice1 === "ciseaux") {
        if (choice2 === "feuille") {
            return "Gagné!";
        } else {
            return "Perdu!";
        }
    }
}
