const question = document.getElementById("question");
const choices = Array.from(document.getElementsByClassName("choice-text"));

const progress_text = document.getElementById("progress-text");
const score_text = document.getElementById("score");
const progress_bar_full = document.getElementById("progress-bar-full");

let current_question = {};
let accepting_answers = false;
let score = 0;
let question_counter = 0;
let available_questions = [];

let questions = [
    {
        question: 'HTML stands for?',
        choice1: 'HyperText Markup Language',
        choice2: 'HighText Machine Language',
        choice3: 'HyperText and links Markup Language',
        choice4: 'None of the above',
        answer: 1,
    },
    {
        question: "The correct sequence of HTML tags for starting a webpage is?",
        choice1: "HTML, Body, Title, Head",
        choice2: "Head, Title, HTML, body",
        choice3: "HTML, Head, Title, Body",
        choice4: "HTML, Head, Title, Body",
        answer: 3,
    },
    {
        question: " Which of the following tag is used for inserting the largest heading in HTML?",
        choice1: "<h2>",
        choice2: "<h3>",
        choice3: "<h4>",
        choice4: "<h1>",
        answer: 4,
    },
    {
        question: " Which type of JavaScript language is?",
        choice1: "Object-Oriented",
        choice2: "Object-Based",
        choice3: "Assembly-language",
        choice4: "None of the above",
        answer: 2,
    },
];

const CORRECT_BONUS = 10;
const MAX_QUESTIONS = 4;

start_game = () => {

    question_counter = 0;
    score = 0;
    available_questions = [...questions];

    get_new_question();
};

get_new_question = () => {
    if (available_questions.length === 0 || question_counter >= MAX_QUESTIONS) {
        //there is no questions or all question have been fetched
        return window.location.assign('/end.html');
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
//main
start_game();