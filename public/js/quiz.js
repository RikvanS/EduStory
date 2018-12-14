(function() {
    const myQuestions = [
        {
            question: "In welke stad is het Hanzeverbond ontstaan?",
            answers: {
                A: "Groningen",
                B: "Lubeck",
                C: "Visby",
                D: "Gdansk"
            },
            correctAnswer: "B"
        },
        {
        question: "Hoe wordt de kraantoren in de haven van Gdansk aangedreven?",
        answers: {
            A: "De kraan werkt op stoomkracht",
            B: "Door mensen die in grote wielen lopen",
            C: "Sterke ossen trekken de vracht via een katrol omhoog"
        },
        correctAnswer: "B"
    },
    {
        question: "Van welk beroep waren Nederlanders erg gewild in het buitenland?",
        answers: {
            A: "Architecten",
            B: "Boeren",
            C: "Metaalwerkers"
        },
        correctAnswer: "A"
    }
    {
        question: "Hoe werd Lubeck ook wel genoemd?",
        answers: {
            A: "Hanzehoofdstad",
            B: "De koningin van de Hanze",
            C: "De Keizer van de Hanze"
        },
        correctAnswer: "B"
    }
    {
        question: "Wat is een gilde?",
        answers: {
            A: "Een verbond van vakmensen",
            B: "Een vereniging voor mensen met dezelfde hobby",
            C: "Een speciaal soort huis"
        },
        correctAnswer: "A"
    }
    {
        question: "Op welk eiland ligt de plaats Visby?",
        answers: {
            A: "Langeland",
            B: "Ijsland",
            C: "Gotland"
        },
        correctAnswer: "C"
    }
    
];

function buildQuiz() {
    console.log('test');
    const output = [];

    myQuestions.forEach(
        (currentQuestion, questionNumber) => {
            const answers = [];

            for(letter in currentQuestion.answers) {
                answers.push(
                    `<label>
                    <input type="radio" class="option-input" name="question${questionNumber}" value = "${letter}"></input><span class="checkmark"></span>
                        ${letter} :
                        ${currentQuestion.answers[letter]}
                    </label>`
                );
            }

        output.push(
            `<div class="slide">
                <div class="question">${currentQuestion.question}</div>
                <div class="answers">${answers.join('')}</div>
            </div>`
        );
        }
    );
    quizContainer.innerHTML = output.join('');
}

function showResults() {

    const answerContainers = quizContainer.querySelectorAll('.answers');

    let numCorrect = 0;

    myQuestions.forEach( (currentQuestion, questionNumber) => {

        const answerContainer = answerContainers[questionNumber];
        const selector = 'input[name=question'+questionNumber+']:checked';
        const userAnswer = (answerContainer.querySelector(selector) || {}).value;

        if(userAnswer === currentQuestion.correctAnswer) {
            numCorrect++;

            answerContainers[questionNumber].style.color = 'rgb(0, 163, 54)';
        }
        else {
            answerContainers[questionNumber].style.color = 'darkred';
        }
    });
    loadDoc('GET', '/chapters/riga/riga-quiz', workplease);
    document.getElementById('progressdiv').style.display = 'block';
    resultsContainer.innerHTML = 'Je hebt ' + numCorrect + ' van de ' + myQuestions.length + ' vragen juist beantwoord!';
}

function showSlide(n) {
    console.log(n);
    slides[currentSlide].classList.remove('active-slide');
    slides[n].classList.add('active-slide');
    currentSlide = n;

    if (currentSlide === 0) {
        previousButton.style.display = 'none';
    } else {
        previousButton.style.display = 'inline-block';
    }

    if (currentSlide === slides.length-1) {
        nextButton.style.display = 'none';
        submitButton.style.display = 'inline-block';
    } else {
        nextButton.style.display = 'inline-block';
        submitButton.style.display = 'none';
    }
}

function showNextSlide() {
    showSlide(currentSlide + 1);
}

function showPreviousSlide() {
    showSlide(currentSlide - 1);
}  

const quizContainer = document.getElementById('quiz');
const resultsContainer = document.getElementById('results');
const submitButton = document.getElementById('submit');

buildQuiz();

const previousButton = document.getElementById('previous');
const nextButton = document.getElementById('next');
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

showSlide(0);

submitButton.addEventListener("click", showResults);
previousButton.addEventListener("click", showPreviousSlide);
nextButton.addEventListener("click", showNextSlide);

})();
