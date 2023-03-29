const choices = document.querySelectorAll('.btn');
const userScore = document.getElementById('user-score');
const computerScore = document.getElementById('computer-score');
const resultText = document.getElementById('result-text');

let userScoreCount = 0;
let computerScoreCount = 0;

choices.forEach(choice => {
	choice.addEventListener('click', () => {
		const userChoice = choice.id;
		const computerChoice = getComputerChoice();
		const winner = getWinner(userChoice, computerChoice);
		showResult(winner, userChoice, computerChoice);
	});
});

function getComputerChoice() {
	const choices = ['rock', 'paper', 'scissors'];
	const randomIndex = Math.floor(Math.random() * 3);
	return choices[randomIndex];
}

function getWinner(userChoice, computerChoice) {
	if (userChoice === computerChoice) {
		return 'draw';
	} else if (userChoice === 'rock' && computerChoice === 'scissors' || 
			   userChoice === 'paper' && computerChoice === 'rock' || 
			   userChoice === 'scissors' && computerChoice === 'paper') {
		return 'user';
	} else {
		return 'computer';
	}
}
