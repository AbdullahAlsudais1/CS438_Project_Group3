const question = document.getElementById("question");
const choices = Array.from(document.getElementsByClassName("choice-text"));
const progress_text = document.getElementById("progress-text");
const score_text = document.getElementById("score");
const progress_bar_full = document.getElementById("progress-bar-full");
const loader = document.getElementById('loader');
const game = document.getElementById('game');

let current_question = {};
let accepting_answers = false;
let score = 0;
let question_counter = 0;
let available_questions = [];

/* the questions from open trivia database, we chosed 10 easy sport questions */
let questions = [];

fetch('https://opentdb.com/api.php?amount=10&category=21&difficulty=easy&type=multiple').then(res => {
    return res.json();
})
    .then((loadedQuestions) => {
        console.log(loadedQuestions.results); // to make sure if it's working
        questions = loadedQuestions.results.map((loadedQuestion) => {
            const formattedQuestion = {
                question: loadedQuestion.question
            };

            const answerChoices = [...loadedQuestion.incorrect_answers];// store incorrect anwers in array
            formattedQuestion.answer = Math.floor(Math.random() * 3) + 1;// making the correct answer in random index
            answerChoices.splice(formattedQuestion.answer - 1, 0, loadedQuestion.correct_answer);

            answerChoices.forEach((choice, index) => {
                formattedQuestion['choice' + (index + 1)] = choice;
            });

            return formattedQuestion;
        });
        start_game();
    })
    .catch(err => { // It will show the errors occured in the console, no need for that really just for best practice
        console.error(err);
    });

/*Maybe increase the questions to 5?*/
const CORRECT_BONUS = 10;
const MAX_QUESTIONS = 10;

start_game = () => {

    question_counter = 0;
    score = 0;
    available_questions = [...questions];

    get_new_question();
    game.classList.remove('hidden');
    loader.classList.add('hidden');
};

get_new_question = () => {
    if (available_questions.length === 0 || question_counter >= MAX_QUESTIONS) {
        localStorage.setItem('mostRecentScore', score);
        //there is no questions or all question have been fetched
        return window.location.assign('end.html');
    }

    question_counter++;
    progress_text.innerText = `question ${question_counter}/${MAX_QUESTIONS}`; // display question counter
    progress_bar_full.style.width = `${(question_counter / MAX_QUESTIONS) * 100}%`; //increment of progress bar
    const question_index = Math.floor(Math.random() * available_questions.length); // random question
    current_question = available_questions[question_index];
    question.innerText = current_question.question;

    choices.forEach((choice) => {
        const number = choice.dataset['number'];
        choice.innerText = current_question['choice' + number]; // get choices for specific question
    });

    available_questions.splice(question_index, 1); // to prevent duplicate questions
    accepting_answers = true;
};

choices.forEach((choice) => //once you click on the choice the next will show up
{
    choice.addEventListener('click', (e) => {
        if (!accepting_answers) return;

        accepting_answers = false;
        const selected_choice = e.target;
        const selected_answer = selected_choice.dataset['number'];
        const class_to_apply = selected_answer == current_question.answer ? "correct" : "incorrect";
        //if the answer is correct or not
        if (class_to_apply == "correct") {
            increment_score(10)
        }
        selected_choice.parentElement.classList.add(class_to_apply);

        setTimeout(() => {
            selected_choice.parentElement.classList.remove(class_to_apply);
            get_new_question();
        }, 1000);
    });
});
increment_score = num => {
    score += num;
    score_text.innerText = score;
};
