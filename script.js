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
    document.getElementById("result").innerHTML = result;
}
function compare(choice1, choice2) {
    if (choice1 === choice2) {
        return "Égalité!";
    }
    if (choice1 === "pierre") {
        if (choice2 === "ciseaux") {
            return "Vous avez gagné!";
        } else {
            return "L'ordinateur a gagné!";
        }
    }
    if (choice1 === "feuille") {
        if (choice2 === "pierre") {
            return "Vous avez gagné!";
        } else {
            return "L'ordinateur a gagné!";
        }
    }
    if (choice1 === "ciseaux") {
        if (choice2 === "feuille") {
            return "Vous avez gagné!";
        } else {
            return "L'ordinateur a gagné!";
        }
    }
}
