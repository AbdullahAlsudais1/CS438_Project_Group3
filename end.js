const username = document.getElementById('username');
const saveScoreButton = document.getElementById('saveScoreButton');
const finalScore = document.getElementById('finalScore');
const mostRecentScore = localStorage.getItem('mostRecentScore');
const highScores = JSON.parse(localStorage.getItem("highScores")) || [];
const MAX_HIGH_SCORES = 5;

finalScore.innerText = mostRecentScore;
username.addEventListener('keyup', () => {
    saveScoreButton.disabled = !username.value; // The save button will be disabled until the username value is filled
})
saveHighScore = (e) => {
    console.log("clicked the save button!") // We will delete all console logs in the end
    e.preventDefault(); // To prevent the form form submitting to a new page
    const score = {
        score: Math.floor(Math.random()*100), // might be able to change this line later since it's linked to a random number testing
        name: username.value
    };
    highScores.push(score);
    highScores.sort( (a,b) => 
       b.score - a.score)
    highScores.splice(5);
    localStorage.setItem("highScores", JSON.stringify(highScores));
    window.location.assign("/");
};